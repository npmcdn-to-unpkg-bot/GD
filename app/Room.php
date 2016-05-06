<?php

namespace GD;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    
    protected $table = "room";

    // return all items in this room
    public function items(){
    	return $this -> hasMany('GD\Items');
    }
}
