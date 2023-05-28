<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\storeRequest;
use App\Http\Requests\User\UserStoreRequest;
use App\Service\User\UserService;
use Exception;

//here is the solid version
class SolidUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    // here is how to fix this problem (S) 
    // thank you now i am responsible only for storing the user
    // now i follow the single responsibilty principle
    public function store(UserStoreRequest $request, UserService $userService)
    {
        //validation
        //first we made a request class for validating the data
        //if we want to return the validated data, we call validated function
        $user_data = $request->validated();

        //creation
        //the logic for creating the user is now moved to a service class
        $userService->store($user_data);
        

        return redirect()->route('user.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    // here is how to fix this problem (O)
    // thank you, now i am not being modified any more, thanks to the NotificationInterface
    // when a new notification system is introduced, you make a new file that implements that 
    // interface, and iam not modified anymore, i am dynamic now and the notification type
    // will be choosen in the runtime
    public function notify($type){

        try{
            $serviceClass = 'App\Service\User\\'.$type.'Service';
            (new $serviceClass)->notify();    
        } catch(Exception $e){
            abort(404,'we will support it soon');
        }
        
        // return redirect()->route('user.index');
    }
    //check App\Service\User\email and sms Service
}
