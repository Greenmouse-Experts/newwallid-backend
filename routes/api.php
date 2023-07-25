<?php

use App\Http\Middleware\CheckUserisIndividual;
use App\Http\Middleware\CheckUserisOrganization;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response([
        'status' => true,
        'message' => 'You are now on WALL-ID API endpoints'
    ]);
});



Route::group(['middleware' => ['cors', 'json.response']], function () {


    // Auth
    Route::prefix('auth')->group(function () {
        Route::post('login', 'Auth\LoginController@index');
        Route::post('register', 'Auth\RegisterController@store');
        Route::post('confirm-email/{email}', 'Auth\RegisterController@confirm_email');
        Route::post('register/v2', 'Auth\RegisterController@storev2');
        Route::post('organization/register', 'Auth\RegisterController@storeOrganization');
        Route::post('organization/register/v2', 'Auth\RegisterController@storeOrganizationv2');
        Route::post('resend/emailverification/{email}', 'Auth\RegisterController@resend');
        Route::post('resend/emailverification/v2/{email}', 'Auth\RegisterController@resendv2');
        Route::post('password/email', 'Auth\RegisterController@forget_password');
        Route::post('password/reset', 'Auth\RegisterController@reset_password');
        Route::post('forgot_password', 'Auth\NewPasswordController@forgotPassword');
        Route::post('admin/login_admin', 'Auth\LoginController@loginAdmin');
    });

    // Passport Protected
    Route::middleware('auth:api')->group(function () {
        Route::get('/user', 'HomeController@user');
        Route::get('/organization/subscriptions', 'HomeController@orgSubscriptions');
        Route::get('/events/notifications', 'Events\MainController@unreadNotification');
        Route::post('logout', 'Auth\LoginController@apiLogout');

        // Payments
        Route::prefix('payments')->group(function () {
            Route::get('/', 'Payment\PaymentController@index');
            Route::post('/save', 'Payment\PaymentController@save_data');
            Route::post('/create_ticket_after_payment', 'Payment\PaymentController@create_ticket');
            Route::get('/verify/{ref}', 'Payment\PaymentController@verify');
            Route::post('/verify/subscription', 'Payment\PaymentController@mobile_verify_subscription_payment_and_save');
            Route::post('/verify/ticket', 'Payment\PaymentController@mobile_verify_ticket_payment_and_save');
        });

        // Ticketing
        Route::prefix('tickets')->group(function () {
            Route::get('/', 'Ticket\MainController@index');
            Route::post('/', 'Ticket\MainController@store');
            Route::get('/categories', 'Ticket\MainController@tickets');
            Route::post('/buy', 'Ticket\MainController@buy');
            Route::post('/buy/free', 'Ticket\MainController@buy_free');
            Route::get('/{id}', 'Ticket\MainController@getevent_ticket');
        });


        // IDs
        Route::group(['prefix' => 'ids'], function () {
            Route::get('/', 'MainController@index');
            Route::post('/store', 'MainController@store');
            Route::get('/created_ids', 'MainController@created_ids');
            Route::get('/created_ids/search', 'MainController@SearchCreated_ids');
            Route::get('/created_ids/business', 'MainController@business_created_ids');
            Route::get('/created_ids/health', 'MainController@health_created_ids');
            Route::get('/created_ids/students', 'MainController@students_created_ids');
            Route::get('/show/{id}', 'MainController@show');
            Route::put('/update/{id}', 'MainController@update');
            Route::get('/user', 'MainController@getUserIdcard');
            Route::get('/user/business', 'MainController@getUserbusinessIdcard');
            Route::get('/user/health', 'MainController@getUserhealthIdcard');
            Route::get('/user/students', 'MainController@getUserstudentsIdcard');
            Route::get('organization', 'MainController@getOrgIdcard');
            Route::delete('/delete/{id}', 'MainController@destroy');
        });

        // Users
        Route::prefix('users')->group(function () {
            Route::get('/', 'User\MainController@index');
            Route::get('/roles', 'User\MainController@roles');
            Route::get('/notifications', 'User\MainController@notifications');
            Route::get('/{id}', 'User\MainController@getUser');
            Route::get('/user/idcardnumber', 'User\MainController@getUserByIdNumber');

            Route::get('/username/{username}', 'User\MainController@profile');
            Route::get('/individual/get', 'User\MainController@getIndividualUsers');
            Route::get('/organization/get', 'User\MainController@getOrganizationUsers');
            Route::get('/organization/role/get', 'User\MainController@getOrganizationRoles');
            Route::get('/user/get', 'User\MainController@SearchUserByuserName');
            Route::get('/user/verify', 'User\MainController@verifyUser');

        });


        // Individual
        Route::group(['prefix' => 'individuals', 'middleware' => CheckUserisIndividual::class], function () {
            Route::get('/', 'Individual\MainController@index');
            Route::get('/getUser', 'Individual\MainController@getUser');
            Route::get('/mobileStats', 'Individual\MainController@mobileStats');
            Route::patch('/', 'Individual\MainController@update');
            Route::patch('/v2', 'Individual\MainController@updatev2');
            Route::get('/all', 'Individual\MainController@allIndividuals');
            Route::get('/organizations/join-requests', 'Individual\MainController@organizations_join_request');
            Route::post('/organizations/join-request', 'Individual\MainController@send_join_request_Organization');
            Route::get('/organizations', 'Individual\MainController@joined_Organization');
            Route::get('/organizations/{query}', 'Individual\MainController@search_joined_Organization');
            Route::get('/organizations/o/{query}', 'Individual\MainController@search_Organization');//
            Route::post('/organizations/o/all', 'Individual\MainController@listAll_Organization');//
            Route::get('/organizations/subscriptions/plans/search', 'Individual\MainController@search_Organization_plan');
            Route::get('/organizations/subscriptions/active/all', 'Individual\MainController@allUserActiveSubscription');
            Route::get('/organizations/subscriptions/expired/all', 'Individual\MainController@allUserExpiredSubscription');
            Route::get('/organizations/{id}/subscriptions', 'Individual\MainController@organization_subscriptions');
            Route::get('/organizations/{id}/plans', 'Individual\MainController@organization_subscription_plans');
            Route::post('/organizations/subscription/pay', 'Individual\MainController@intiateSubscriptionPayment');
        //            Route::post('member/create-request', 'Organization\MemberController@createRequest');
        });


        // Orgs
        Route::group(['prefix' => 'organizations', 'middleware' => CheckUserisOrganization::class], function () {

            Route::get('/', 'Organization\MainController@index');
            Route::patch('/', 'Organization\MainController@update');
            Route::patch('/v2', 'Organization\MainController@updatev2');

            Route::patch('/change_password', 'Organization\MainController@updatePassword');
            Route::get('/getUser', 'Organization\MainController@getUser');
            Route::get('/mobileStats', 'Organization\MainController@mobileStats');
            // Member
            Route::get('members', 'Organization\MemberController@index');
            Route::get('members/search', 'Organization\MemberController@searchMember');
            Route::get('members/active', 'Organization\MemberController@active_member');
            Route::get('members/unactive', 'Organization\MemberController@unactive_member');
            // Route::get('members/{id}', 'Organization\MemberController@view_member');
            Route::post('members', 'Organization\MemberController@store');
            Route::patch('members/{id}', 'Organization\MemberController@update');

            Route::get('members/requests/get', 'Organization\MemberController@my_requests');
            Route::get('members/requests/approve/{id}', 'Organization\MemberController@approve_request');
            Route::get('members/requests/decline/{id}', 'Organization\MemberController@decline_request');
            Route::get('members/requests/{id}', 'Organization\MemberController@get_requests_info');
            Route::get('members/{id}', 'Organization\MemberController@show');
            Route::get('members/activate/{id}', 'Organization\MemberController@activate');
            Route::get('members/deactivate/{id}', 'Organization\MemberController@deactivate');

            Route::post('members/add_and_approve', 'Organization\MemberController@add_approve');
            Route::post('members/add_no_subscription', 'Organization\MemberController@add_no_subscription');

            Route::post('/add-and-approve', 'Organization\MemberController@addApprove');
            // Sub
            Route::get('/subscriptions', 'Organization\SubscriptionController@index');
            Route::get('/subscriptions/expired', 'Organization\SubscriptionController@expired_subscription');
            Route::get('/subscriptions/active', 'Organization\SubscriptionController@active_subscription');
            Route::post('/subscriptions/plans/store', 'Organization\SubscriptionController@store_plan');
            Route::put('/subscriptions/plans/update/{id}', 'Organization\SubscriptionController@update_plan');
            Route::delete('/subscriptions/plans/delete/{id}', 'Organization\SubscriptionController@delete_plan');
            Route::get('/subscriptions/plans', 'Organization\SubscriptionController@plans');
            Route::get('/subscriptions/plans/byOrg', 'Organization\SubscriptionController@plansbyOrg');
            Route::post('/subscriptions', 'Organization\SubscriptionController@store');
            Route::post('/subscribe', 'Organization\SubscriptionController@userSubscribe');
            Route::put('/subscriptions/{id}/update', 'Organization\SubscriptionController@updateSubscription');

            // Cat
            Route::get('/categories', 'Organization\CategoryController@index');
            Route::post('/categories', 'Organization\CategoryController@store');

            //just add a member no subscripotion
        });

        // ID Card Template
        Route::prefix('id-card/templates')->group(function () {
            Route::get('/', 'Organization\IDTemplateController@index');
            Route::post('/add', 'Organization\IDTemplateController@store');
            Route::post('/update/{id}', 'Organization\IDTemplateController@update');
            Route::delete('/delete/{id}', 'Organization\IDTemplateController@delete');
        });

        // ID Card Management
        Route::prefix('id-card-management')->group(function () {
            Route::get('/', 'IDs\IDController@index');
            Route::post('/store', 'IDs\IDController@store');
            Route::get('/pending/id-card/individual', 'IDs\IDController@pending_individual');
            Route::get('/pending/id-card/organization', 'IDs\IDController@pending_organization');
            Route::post('/process/id-card/organization/{id}', 'IDs\IDController@process_idCard_organization');
            Route::prefix('organization')->group(function () {
                Route::get('/approved/id-card', 'IDs\IDController@approved_idCard');
                Route::get('/pending/id-card', 'IDs\IDController@pending_idCard');
                Route::get('/declined/id-card', 'IDs\IDController@declined_idCard');
                Route::post('/process/id-card/{id}', 'IDs\IDController@process_idCard');
                Route::post('/create', 'IDs\IDController@create');
            });
        });

        // Verification
        Route::prefix('verificaton')->group(function () {
            Route::get('/', 'Verification\MainController@index');
            Route::post('/send-request', 'Verification\MainController@send_request');
            Route::get('/view-request', 'Verification\MainController@verification_requests');
            Route::prefix('organization')->group(function () {
                Route::post('/add', 'Verification\MainController@add');
                Route::get('/verifiers', 'Verification\MainController@verifiers');
                Route::get('/pending', 'Verification\MainController@pending');
                Route::get('/decline', 'Verification\MainController@getdecline');
                Route::post('/approve/{id}', 'Verification\MainController@approve');
                Route::post('/decline/{id}', 'Verification\MainController@decline');
            });
        });

        // Profiling
        Route::prefix('profile')->group(function () {
            Route::post('/picture', 'Profile\MainController@upload_profile_picture');
            Route::post('/password/update', 'Profile\MainController@update_password');
            Route::post('/individual/update', 'Profile\MainController@update_individual_profile');
            Route::post('/organization/update', 'Profile\MainController@update_organization_profile');
        });

        // Events
        Route::prefix('events')->group(function () {
            Route::get('/', 'Events\MainController@index');
            Route::get('/searchbyname/get', 'Events\MainController@SearchByName');
            Route::get('/upcoming', 'Events\MainController@upcomingEvents');
            Route::get('/open/upcoming', 'Events\MainController@OpenUpcomingEventsbyOtherUsers');
            Route::get('/past', 'Events\MainController@pastEvents');
            Route::get('/SearchOpenUpcoming', 'Events\MainController@SearchOpenUpcomingEventsbyOtherUsers');
            Route::get('/SearchPastEvents', 'Events\MainController@SearchPastEvents');
            Route::post('/', 'Events\MainController@store');
            Route::post('/invite', 'Events\MainController@invite');
            Route::post('/invite_multiple', 'Events\MainController@invite_multiple');
            Route::get('/invites', 'Events\MainController@invites');
            Route::get('/SearchInvites', 'Events\MainController@SearchInvites');
            Route::get('/invites/upcoming', 'Events\MainController@upcominginvites');
            Route::get('/invites/past', 'Events\MainController@pastinvites');
            Route::get('/invites/accepted', 'Events\MainController@acceptedinvites');
            Route::get('/invites/declined', 'Events\MainController@declinedinvites');
            Route::get('/invites/checked_in', 'Events\MainController@checked_ininvites');
            Route::get('/tickets/purchased', 'Events\MainController@purchasedtickets');
            // dont know this
            Route::get('/all', 'Events\MainController@allMyEvents');
            //dont know this end
            Route::put('/{id}', 'Events\MainController@update');
            Route::get('/mine', 'Events\MainController@userEvents');
            Route::get('/{id}', 'Events\MainController@show');
            Route::get('/getFullDetails/{id}', 'Events\MainController@showFullDetails');
            Route::delete('/{id}', 'Events\MainController@destroy');
            Route::get('/close/{id}', 'Events\MainController@closeEvent');

            Route::get('/{id}/requests', 'Events\MainController@eventRequests');
            Route::get('/requests/{id}/{status}', 'Events\MainController@updateRequestStatus');

            Route::get('/{id}/share', 'Events\MainController@shareEvent');
            Route::get('/export', 'Events\MainController@exportEvents');
            Route::get('/category/list', 'Events\MainController@categories');
        });


        // Admin
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['namespace' => 'Admin'], function () {
                Route::get('/', 'HomeController@details');
                Route::post('/storeadmin', 'HomeController@storeadmin');
                Route::get('/all', 'HomeController@alladmins');

                // Users
                Route::get('/users/{status?}', 'UserController@index');
                Route::get('/allLatestusers', 'UserController@getLatestUser');
                Route::get('/users/{id}/{status?}', 'UserController@updateStatus');
                Route::delete('/users/{id}', 'UserController@destroy');

                // Members
                Route::get('/all/members', 'OrganizationController@members');

                // IDCard Management
                Route::get('/all/templates', 'OrganizationController@templates');
                Route::get('/all/idcards', 'OrganizationController@idcards');

                // Orgs
                Route::get('/organizations/{status?}', 'OrganizationController@index');
                Route::get('/organizations/{id}/{status?}', 'OrganizationController@updateStatus')->where(
                    ['status' => '([0-1])']
                );

                // Events
                Route::get('/events', 'EventController@index');
                Route::post('/events/category/store', 'EventController@store_category');
                Route::get('/events/category/all', 'EventController@admin_all_category');
                Route::put('/events/category/update/{id}', 'EventController@admin_update_category');
                Route::delete('/events/category/destroy/{id}', 'EventController@admin_delete_category');

                // Payments
                Route::get('/payments/tickets', 'PaymentController@index');
                Route::get('/payments/subscriptions', 'PaymentController@subscriptions');

                // Members
                Route::get('/all/verifiers', 'OrganizationController@verifiers');
            });
        });
    });

    Route::prefix('test')->group(function () {
        Route::get('url', 'TestController@signedUrl');
        Route::get('notify', 'TestController@notify');
        Route::get('role', 'TestController@roles');
        Route::get('resource', 'TestController@resource');
        Route::get('util', 'TestController@util');
        Route::get('user', 'TestController@getuser');
    });
});
