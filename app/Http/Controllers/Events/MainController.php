<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Resources\TicketResource;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Event;

use App\Http\Requests\EventRequest;
use App\Http\Requests\InvitationRequest;

use App\Http\Resources\EventResource;
use App\Http\Resources\EventDetailsResource;
use App\Http\Resources\IndividualResource;
use App\Http\Resources\SimpleEventResource;
use App\Http\Resources\InvitationResource;

use App\Models\Member;
use App\Notifications\EventSharedNotification;

use Excel;
use App\Exports\EventExport;
use App\Models\TicketCategory;
use App\Models\EventRequest as Invitation;

use App\Handlers\NotificationHandler;
use App\Handlers\EmailHandler;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\NotificationResource;
use App\Models\Category;
use App\Models\EventRequest as ModelsEventRequest;
use App\Models\Ticket;
use Intervention\Image\ImageManagerStatic as Image;


class MainController extends Controller
{
    use NotificationHandler, EmailHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($userid = null)
    {
        if ($userid == null) {
            $events = Event::where('status', 'open')->latest()->paginate(10);
        } else {
            $events = Event::where('user_id', Auth::user()->id)->latest()->paginate(10);
        }

        return response([
            'status' => true,
            'message' => 'Events',
            'data' => EventResource::collection($events)
        ]);

        return;
    }

    public function searchbyname(Request $request)
    {

        $name = $request->name;

        // dd($username);

        $results = Event::where('name', 'LIKE', "%{$name}%")->latest()->paginate(15);

        if ($results) {
            return $this->jsonPaginatedResponse('Search results of events by name', SimpleEventResource::collection($results));
        } else {
            return response([
                'status' => false,
                'message' => 'Event(s) with that query not found',
                'data' => null
            ], 400);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $request->validated();


        try {

            if ($request->image) {

                // $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
                // Image::make($request->image)->save(public_path('events/') . $image_name);

            //
                            $image_name = time() . '.' . $request->image->getClientOriginalExtension();
            
            
                            $request->image->move(public_path('events/'), $image_name);


            }

            if ($request->venue_image) {

                // $venue_image_name = time() . "." . explode('/', explode(':', substr($request->venue_image, 0, strpos($request->venue_image, ';')))[1])[1];
                // Image::make($request->venue_image)->save(public_path('venue_image/') . $venue_image_name);

                                $venue_image_name = time() . '.' . $request->venue_image->getClientOriginalExtension();
                
                
                                $request->venue_image->move(public_path('venue_image/'), $venue_image_name);
                //
            }

            $event = Event::create([
                'name' => $request->name,
                'type' => $request->type,
                'venue' => $request->venue,
                'venue_image' => isset($venue_image_name) ? $venue_image_name : null,
                'image' => isset($image_name) ? $image_name : null,
                'isFree' => $request->isFree == false ? 'false' : 'true',
                'price' => ($request->pricing == 'multiple' || $request->isFree) ? 0 : $request->price,
                'pricing' => $request->pricing,
                'tickets' => $request->tickets,
                'user_id' => Auth::user()->id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'category_id' => $request->category_id,
                'unique_id' => $this->generateUniq(),
                'description' => $request->description
            ]);

            if ($request->pricing == 'multiple') {
                foreach ($request->ticketCategories as $key => $row) {

                //                    return $row;

                    TicketCategory::create([
                        'name' => $row['name'],
                        'price' => $row['price'],
                        'event_id' => $event->id
                    ]);
                }
            }

            return response([
                'status' => true,
                'message' => 'Event created Successfully',
                //                'data' => new SimpleEventResource($event)
            ]);
        } catch (\Exception $e) {
            if (isset($event)) {
                $event->delete();
            }
            throw $e;
        }
    }


    public function userEvents()
    {
        $event = Event::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('Events', EventDetailsResource::collection($event));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_request = Invitation::where('event_id', $id)->where('user_id', Auth::user()->id)->first();
        $purchased_event_ticket = Ticket::where('event_id', $id)->count();
        $event = Event::findOrFail($id);
        return response([
            'status' => true,
            'message' => 'Event Details',
            'data' => new SimpleEventResource($event),
            'rdata' => $event_request,
            'pdata' => $purchased_event_ticket

        ]);
    }

    public function showFullDetails($id)
    {

        $purchased_event_ticket = Ticket::where('event_id', $id)->count();
        $event = Event::findOrFail($id);
        $attendees = Event::find($id)->attendees;
        return response([
            'status' => true,
            'message' => 'Event Details',
            'data' => [
                'event' => new SimpleEventResource($event),
                'purchased_tickets' => $purchased_event_ticket,
                'attendees' => TicketResource::collection($attendees)
            ],

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $request->validated();

        $event = Event::findOrFail($id);

        if ($event->pricing == 'multiple' && $request->pricing == 'single') {
            TicketCategory::where('event_id', $event->id)
                ->delete();
        }

        if ($request->image != $event->image) {

            $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            Image::make($request->image)->save(public_path('events/') . $image_name);

            $old_file = public_path() . '/events/' . $event->image;
            if (file_exists($old_file)) {
                unlink($old_file);
            }
        }

        if ($request->venue_image != $event->venue_image) {

            $venue_image_name = time() . "." . explode('/', explode(':', substr($request->venue_image, 0, strpos($request->venue_image, ';')))[1])[1];
            Image::make($request->venue_image)->save(public_path('venue_image/') . $venue_image_name);

            $old_file = public_path() . '/venue_image/' . $event->venue_image;
            if (file_exists($old_file)) {
                unlink($old_file);
            }
        }

        try {

            $event->update([
                'name' => $request->name,
                'type' => $request->type,
                'venue' => $request->venue,
                'venue_image' => $venue_image_name ?? $request->venue_image,
                'image' => $image_name ?? $request->image,
                'isFree' => $request->isFree == false ? 'false' : 'true',
                'price' => ($request->pricing == 'multiple' || $request->isFree) ? 0 : $request->price,
                'pricing' => $request->pricing,
                'tickets' => $request->tickets,
                'user_id' => Auth::user()->id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'category_id' => $request->category_id,
                'description' => $request->description
            ]);

            if ($request->pricing == 'multiple') {
                TicketCategory::where('event_id', $event->id)
                    ->delete();
                foreach ($request->ticketCategories as $key => $row) {
                    TicketCategory::create([
                        'name' => $row['name'],
                        'price' => $row['price'],
                        'event_id' => $event->id
                    ]);
                }
            }


            return response([
                'status' => true,
                'message' => 'Event updated successfully',
                'data' => new SimpleEventResource($event)
            ]);
        } catch (Exception $e) {
            return response([
                'status' => false,
                'message' => 'Event could not be updated',
            ]);
        }
    }

    public function updateRequestStatus($id, $status)
    {
        $iv = Invitation::findOrFail($id);
        $iv->status = $status;
        $iv->save();

        return response([
            'status' => true,
            'message' => 'Event Request status updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //check if someone has been invited to the event
        $approved_event_request = Invitation::where('event_id', $id)->where('status', 'approved')->get();
        //        check if event has a ticket associated to it
        $ticket = Ticket::where('event_id', $id)->get();

        if ($approved_event_request->count() > 0 && $ticket->count() > 0) {
            return response([
                'status' => false,
                'message' => 'Someone was invited and already bought a ticket to this event'
            ], 400);
        }
        Invitation::where('event_id', $id)->delete();

        $event = Event::findOrFail($id);

        if ($event->pricing == "multiple") {
            TicketCategory::where('event_id', $id)->delete();
        }

        $event->delete();


        $event_image_old_file = public_path() . '/events/' . $event->image;
        if (file_exists($event_image_old_file)) {
            unlink($event_image_old_file);
        }
        $venue_image_old_file = public_path() . '/venue_image/' . $event->venue_image;
        if (file_exists($venue_image_old_file)) {
            unlink($venue_image_old_file);
        }

        return response([
            'status' => true,
            'message' => 'Event deleted Successfully'
        ]);
    }

    public function closeEvent($id)
    {
        $event = Event::findOrFail($this->decodeId($id));
        $event->status = 'closed';
        $event->save();

        return response([
            'status' => true,
            'message' => 'Event closed Successfully'
        ]);
    }

    public function shareEvent($id)
    {
        $event = Event::findOrFail($this->decodeId($id));
        $user = Auth::user();
        $members = Member::where('owner_id', Auth::user()->id)
            ->where('status', 'active')->get();
        try {
            foreach ($members as $key => $row) {
                $user = User::findOrFail($row->user_id);
                $message = array(
                    'body' => 'Event with wallID: ' . $this->encodeId($event->id) . ' has been shared with you!',
                    'from' => Auth::user()->email,
                    'subject' => 'Event Notification'
                );
                $user->notify(new EventSharedNotification($message));
            }

            return response([
                'status' => true,
                'message' => 'Event Shared Successfully'
                // 'data' =>
            ]);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage()
            ]);
        }
    }

    public function allMyEvents()
    {

        return response([
            'status' => true,
            'message' => 'My Events',
            'data' => Event::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function invite(InvitationRequest $request)
    {
        $request->validated();
        //get event id
        $event = Event::where('unique_id', $request->event_id)->first();

        // get the receiver user id
        $user = User::where('username', $request->username)->first();

        //check if user is trying to invite himself to his own event or someone is trying to invite the creator of an event to his own event

        $userEventCheck = Event::where('user_id', $user->id)
            ->where('id', $event->id)->first();


        if ($userEventCheck) {

            return response([
                'status' => false,
                'message' => 'You cant invite this user to this event'
            ]);
        }

        //check if user has aleady been invited to the event by the logged in user

        $userEventReqCh = Invitation::where('user_id', $user->id)
            ->where('event_id', $event->id)
            ->where('sender_id', Auth::user()->id)
            ->first();


        if ($userEventReqCh) {

            return response([
                'status' => false,
                'message' => 'This user has already been invited to this event by you'
            ]);
        }


        //if the creator id of the event is the logged in user
        // or
        // if the creator id of the event is the logged in user and the event is a closed event

        if ($event->user_id == Auth::user()->id || $event->user_id == Auth::user()->id && $event->type == 'close') {

            // $user = User::where('username', $request->username)->first();
            $invitation = Invitation::firstOrCreate([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id
            ]);

            try {
                $this->sendInvitationNotification($user, $event);
            } catch (\Exception $e) {
            }

            return response([
                'status' => true,
                'data' => new InvitationResource($invitation),
                'message' => 'Sender of the invitation is logged in user or event is a closed invite'
            ]);
        }


        // if the event is an open event then anyone with the event id should be able to send an invite


        if ($event->type == "open") {

            $invitation = Invitation::firstOrCreate([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id
            ]);

            try {
                $this->sendInvitationNotification($user, $event);
            } catch (\Exception $e) {
            }

            return response([
                'status' => true,
                'data' => new InvitationResource($invitation),
                'message' => 'This is an open event and anyone should be able to invite any damm body'
            ]);
        }


        //now whatever you see here try and understand it on your own ): PEACE, LOVE and LIGHT

        // if the event is a semi open event then only the creator of the event and those already invited can send invite

        // check if the logged in user has been invited to the event before

        $checkSemiOpen = Invitation::where('event_id', $event->id)
            ->where('user_id', Auth::user()->id)
            ->where('status', 'approved')
            ->first();


        if ($event->type == 'semi-open' && $checkSemiOpen) {

            $invitation = Invitation::firstOrCreate([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id
            ]);

            try {
                $this->sendInvitationNotification($user, $event);
            } catch (\Exception $e) {
            }

            return response([
                'status' => true,
                'data' => new InvitationResource($invitation),
                'message' => 'This is a semi-open event and only the creator or an already invited  who already accepted the invitation can invite another user to this event'
            ]);
        }


        return response([
            'status' => false,
            'message' => 'Toor, You cant invite to this event.'
        ]);
    }

    public function invite_multiple()
    {
        // $test = array(
        //     [
        //         'event_id' => 477236,
        //         'username' => "daveore"
        //     ],
        //     [
        //         'event_id' => 477236,
        //         'username' => "Tech company 2"
        //     ],
        //     [
        //         'event_id' => 477236,
        //         'username' => "Tech company 3"
        //     ]
        // );

        $test = request()->invitees;

        foreach ($test as $item => $value) {
            $event = Event::where('unique_id', $value["event_id"])->first();
            $user = User::where('username', $value["username"])->first();

            $userEventCheck = Event::where('user_id', $user->id)
                ->where('id', $event->id)->first();

            if ($userEventCheck) {

                return response([
                    'status' => false,
                    'message' => 'You cant invite this user to this event'
                ]);

            }

            $userEventReqCh = Invitation::where('user_id', $user->id)
                ->where('event_id', $event->id)
                ->where('sender_id', Auth::user()->id)
                ->first();


            if ($userEventReqCh) {

                return response([
                    'status' => false,
                    'message' => 'This user has already been invited to this event by you'
                ]);

            }

            $data[] = array(
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id,
                'status' => "pending",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            );
        }
        DB::table("event_requests")->insert($data);
        //        return $request;


    }

    public function invitex(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,unique_id',
            'username' => 'required|exists:users,username'
        ]);

        //get event id
        $event = Event::where('unique_id', $request->event_id)->first();

        // get the receiver user id
        $user = User::where('username', $request->username)->first();

        //check if user is trying to invite himself to his own event or someone is trying to invite the creator of an event to his own event

        $userEventCheck = Event::where('user_id', $user->id)
            ->where('id', $event->id)->first();


        if ($userEventCheck) {

            return response([
                'status' => false,
                'message' => 'You cant invite this user to this event'
            ]);
        }

        //check if user has aleady been invited to the event by the logged in user

        $userEventReqCh = Invitation::where('user_id', $user->id)
            ->where('event_id', $event->id)
            ->where('sender_id', Auth::user()->id)
            ->first();


        if ($userEventReqCh) {

            return response([
                'status' => false,
                'message' => 'This user has already been invited to this event by you'
            ]);
        }


        //if the creator id of the event is the logged in user
        // or
        // if the creator id of the event is the logged in user and the event is a closed event

        if ($event->user_id == Auth::user()->id || $event->user_id == Auth::user()->id && $event->type == 'close') {

            // $user = User::where('username', $request->username)->first();
            $invitation = Invitation::firstOrCreate([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id
            ]);

            try {
                $this->sendInvitationNotification($user, $event);
            } catch (\Exception $e) {
            }

            return response([
                'status' => true,
                'data' => InvitationResource::collection($invitation),
                'message' => 'Sender of the invitation is logged in user or event is a closed invite'
            ]);
        }


        // if the event is an open event then anyone with the event id should be able to send an invite


        if ($event->type == "open") {

            $invitation = Invitation::firstOrCreate([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id
            ]);

            try {
                $this->sendInvitationNotification($user, $event);
            } catch (\Exception $e) {
            }

            return response([
                'status' => true,
                'data' => new InvitationResource($invitation),
                'message' => 'This is an open event and anyone should be able to invite any damm body'
            ]);
        }


        //now whatever you see here try and understand it on your own ): PEACE, LOVE and LIGHT

        // if the event is a semi open event then only the creator of the event and those already invited can send invite

        // check if the logged in user has been invited to the event before

        $checkSemiOpen = Invitation::where('event_id', $event->id)
            ->where('user_id', Auth::user()->id)
            ->where('status', 'approved')
            ->first();


        if ($event->type == 'semi-open' && $checkSemiOpen) {

            $invitation = Invitation::firstOrCreate([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'sender_id' => Auth::user()->id
            ]);

            try {
                $this->sendInvitationNotification($user, $event);
            } catch (\Exception $e) {
            }

            return response([
                'status' => true,
                'data' => new InvitationResource($invitation),
                'message' => 'This is a semi-open event and only the creator or an already invited  who already accepted the invitation can invite another user to this event'
            ]);
        }


        return response([
            'status' => false,
            'message' => 'Toor, You cant invite to this event.'
        ]);
    }

    public function invites()
    {
        $invites = Invitation::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('Invites', InvitationResource::collection($invites));
    }

    public function SearchInvites(Request $request)
    {
        $name = $request->name;

        $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
            ->where('event_requests.user_id', Auth::user()->id)
            ->where('events.name', 'LIKE', "%{$name}%")
            ->select('event_requests.*')
            ->latest()->paginate(10);

        if ($invites) {
            return $this->jsonPaginatedResponse('Query for Invites', InvitationResource::collection($invites));
        } else {
            return response([
                'status' => false,
                'message' => 'No results found for your query',
            ], 400);
        }


    }

    public function upcominginvites()
    {

        $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
            ->where('event_requests.user_id', Auth::user()->id)
            ->where('events.start_date', '>', date('Y-m-d'))
            ->select('event_requests.*')
            ->latest()->paginate(10);

        return $this->jsonPaginatedResponse('Upcoming Invites', InvitationResource::collection($invites));
    }

    public function pastinvites()
    {
        $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
            ->where('event_requests.user_id', Auth::user()->id)
            ->where('events.start_date', '<', date('Y-m-d'))
            ->select('event_requests.*')
            ->latest()->paginate(10);

        return $this->jsonPaginatedResponse('Past Invites', InvitationResource::collection($invites));
    }

    public function acceptedinvites()
    {

        $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
            ->where('event_requests.user_id', Auth::user()->id)
            ->where('event_requests.status', 'approved')
            ->select('event_requests.*')
            ->latest()->paginate(10);

        return $this->jsonPaginatedResponse('Accepted Invites', InvitationResource::collection($invites));

    }

    public function declinedinvites()
    {
        $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
            ->where('event_requests.user_id', Auth::user()->id)
            ->where('event_requests.status', 'declined')
            ->select('event_requests.*')
            ->latest()->paginate(10);

        return $this->jsonPaginatedResponse('Declined Invites', InvitationResource::collection($invites));

    }

    public function checked_ininvites()
    {

        $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
            ->join('tickets', 'event_requests.event_id', 'tickets.event_id')
            ->where('event_requests.user_id', Auth::user()->id)
            ->where('event_requests.status', 'approved')
            ->where('tickets.check_in', '!=', null)
            ->select('event_requests.*')
            ->latest()->paginate(10);

        return $this->jsonPaginatedResponse('Checked In Invites', InvitationResource::collection($invites));


        // $invites = Invitation::join('events', 'event_requests.event_id', 'events.id')
        //     ->join('tickets', 'event_requests.event_id', 'tickets.event_id')
        //     ->where('event_requests.user_id', Auth::user()->id)
        //     ->where('event_requests.status', 'approved')
        //     ->where('tickets.check_in', '!=', null)
        //     ->select('event_requests.*', 'events.name as name', 'events.start_date as start_date', 'events.isFree as isFree')
        //     ->latest()->paginate(10);

        // return response([
        //     'status' => true,
        //     'message' => 'My Invites',
        //     'data' => $invites,
        //     'api_path' => '/api/events/invites/checked_in'
        // ]);
    }

    public function eventRequests($uniqidID)
    {
        $event = Event::where('unique_id', $uniqidID)->first();
        if ($event) {
            $ir = Invitation::where('event_id', $event->id)
                ->latest()->paginate();

            return $this->jsonPaginatedResponse('Event Invitation Requests', InvitationResource::collection($ir));
        } else {
            return response([
                'status' => false,
                'message' => 'Event not found'
            ]);
        }
    }

    public function upcomingEvents()
    {
        // all upcoming events related to a user

        $event = Event::where('status', 'open')->where('start_date', '>', date('Y-m-d'))->where('user_id', Auth::user()->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('Upcoming Events', EventDetailsResource::collection($event));

        // $events = Event::where('status', 'open')->where('start_date', '>', date('Y-m-d'))->where('user_id', Auth::user()->id)->latest()->paginate(10);
        // // return $this->jsonPaginatedResponse('My Events', SimpleEventResource::collection($events));
        // return response([
        //     'status' => true,
        //     'message' => 'Event created Successfully',
        //     'data' => $events,
        //     'api_path' => '/api/events/upcoming'
        // ]);
    }

    public function OpenUpcomingEventsbyOtherUsers()
    {

        $event = Event::where('status', 'open')
            ->where('type', 'open')
            ->where('start_date', '>', date('Y-m-d'))
            ->where('user_id', '!=', Auth::user()->id)
            ->latest()->paginate(15);
        return $this->jsonPaginatedResponse('Open Upcoming Events by Other Users', EventDetailsResource::collection($event));

    }

    public function SearchOpenUpcomingEventsbyOtherUsers(Request $request)
    {
        $name = $request->name;

        $event = Event::where('status', 'open')
            ->where('type', 'open')
            ->where('name', 'LIKE', "%{$name}%")
            ->where('start_date', '>', date('Y-m-d'))
            ->where('user_id', '!=', Auth::user()->id)
            ->latest()->paginate(15);

        if ($event) {
            return $this->jsonPaginatedResponse('Query for Open Upcoming Event', EventDetailsResource::collection($event));
        } else {
            return response([
                'status' => false,
                'message' => 'No results found for your query',
            ], 400);
        }


    }

    public function pastEvents()
    {
        // all past events related to a user
        $event = Event::where('status', 'closed')->where('start_date', '<', date('Y-m-d'))->where('user_id', Auth::user()->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('Events', EventDetailsResource::collection($event));

    }

    public function SearchPastEvents(Request $request)
    {

        $name = $request->name;

        $event = Event::where('status', 'closed')
            ->where('name', 'LIKE', "%{$name}%")
            ->where('start_date', '<', date('Y-m-d'))
            ->where('user_id', Auth::user()->id)
            ->latest()->paginate(15);

        if ($event) {
            return $this->jsonPaginatedResponse('Query for Past Event', EventDetailsResource::collection($event));
        } else {
            return response([
                'status' => false,
                'message' => 'No results found for your query',
            ], 400);
        }
    }

    public function unreadNotification()
    {
        $notifications = auth()->user()->unreadNotifications()->where('type', 'App\Notifications\InvitationNotification')->get();
        return response([
            'status' => true,
            'message' => 'Event notifications',
            'data' => NotificationResource::collection($notifications)
        ]);
    }

    public function categories()
    {

        $categories = Category::latest()->get();

        return response([
            'status' => true,
            'message' => 'categories',
            'data' => $categories
        ]);
    }

    public function purchasedtickets()
    {
        $purchasedTicket = Ticket::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('All Purchased Tickets', TicketResource::collection($purchasedTicket));
    }
}
