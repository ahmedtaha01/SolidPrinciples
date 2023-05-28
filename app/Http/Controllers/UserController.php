<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//here we will make code which is not solid
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
        return view('user.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    // first: single responsibilty principle
    //this function doesn't follow the principle as it is responsible for:
    // validation , some other data processing , creation of user
    public function store(Request $request)
    {
        //validation
        $user_data = $request->validate([
            'name'      => ['required','min:5'],
            'email'     => ['required','email'],
            'password'  => ['required','min:10','regex:/^[^\d\n]*\d[^\d\n]*$/'],
        ]);

        //some additional data
        $user_data['channels'] = 5;
        $user_data['subscribers'] = 8;

        //creation of user
        User::create($user_data);

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

    // second: open for extension, closed for modification principle
    // we violate this principle because if we want to add a new notification system
    // we will modify this class or specifically this function which is not the
    // rightway to do so.
    public function notify($type){
        if($type == 'email'){

            //write code to send email
        
        }else if($type == 'sms'){

            // write code to send sms 

        }

        return redirect()->route('user.index');
    }
}
