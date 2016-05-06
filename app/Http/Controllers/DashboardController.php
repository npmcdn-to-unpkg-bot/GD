<?php

namespace GD\Http\Controllers;

use Illuminate\Http\Request;

use GD\Http\Requests;

use Auth;
use GD\User;
use GD\Items;
use GD\Room;
use GD\UserProfile;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    


    public function index(){
    	return view('dashboard');//with

    }


    // return custom location info
    public function maps(){

    	return view('maps');
    	
    }


    // Return all users
    public function users(){
    	$users = User::all();

    	return view('users')
    		-> with('users', $users);
    }

    // Return all items
    public function items(){

    	$items = Items::all();

    	return view('items')
    		-> with('items', $items);

    }

    // User specific info
    public function userProfile($id){

    	$user = User::findOrFail($id);

    	// Handle fail request here
        // ...


        // Find a more efficient way to do this:
    	$rooms = Room::where(
    		'created_by', $user -> id)
    		-> get(); 

        /* 
        QueryException in Connection.php line 673:
SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gd.user_profiles' doesn't exist (SQL: select * from `user_profiles` where `created_by` = 1)

        $user_profile = UserProfile::where(
            'created_by', $user -> id)
            -> get();
    */

        $user_profile = UserProfile::where('created_by', '=', $user -> id)
            -> first();
    		 


    	return view('user_profile') 
    		-> with ('user', $user)
    		-> with ('rooms', $rooms)
            -> with ('user_profile', $user_profile);
    }





    public function userInfo($id){
        return User::findOrFail($id);

    }

    public function getUsers(){
        return User::All();

    }
}
