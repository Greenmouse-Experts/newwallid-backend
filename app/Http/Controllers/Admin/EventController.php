<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Http\Resources\EventResource;
use App\Models\Category;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return $this->jsonPaginatedResponse('Events', EventResource::collection($events));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store_category(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:categories',
            'description' => 'required',
        ], [
            'name.unique' => 'jdjdjd'
        ]);

        $event_category = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Event Category Created successfully',
            'data' => new CategoryResource($event_category)
        ], 200);
    }

    public function admin_all_category()
    {
        $categories = Category::latest()->paginate(10);
        return response([
            'status' => true,
            'message' => 'categories',
            'data' => $categories
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function admin_update_category(Request $request, $id)
    {
        // validate request
        $request->validate([
            'name' => 'required|unique:categories',
            'description' => 'required',
        ]);

        $category = Category::findorfail($id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return response([
            'status' => true,
            'message' => 'Category Updated Successfully',
            'data' => $category
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function admin_delete_category($id)
    {
        $category = Category::findorfail($id);
        $category->delete();

        return response([
            'status' => true,
            'message' => 'Category Deleted Successfully',
        ],200);
    }
}
