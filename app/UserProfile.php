<?php

namespace GD;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $table = "user_profile";


    protected $fillable = [

    	'created_by', 
    	'first_name', 
    	'last_name', 
    	'address', 
    	'city', 
    	'country', 
    	'zip_code', 
    	'bio',
    ];


    
    public function user_profile(){
    	return $this -> belongsTo('GD\User');
    } 
}
