<?php

namespace GD\Http\Controllers;

use Illuminate\Http\Request;

use GD\Http\Requests;

use GD\Room;
use Auth;
use Validator;

class RoomController extends Controller
{

	// Restrict access
    public function __construct(){
		$this -> middleware('auth');
	}
	

	public function viewRoomList(){
		//$galleries = Gallery::all();
    	$rooms = Room::where(
    		'created_by', Auth::user() -> id) 
    		-> get();


    	return view('gallery.gallery')
    		-> with('galleries', $galleries);
	}
}
