<?php

namespace GD;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
    'room_id',
    'name',
    'description',
    'created_by',
    ];

    public function gallery(){
    	return $this -> belongsTo('GD\Room');
    }
}
