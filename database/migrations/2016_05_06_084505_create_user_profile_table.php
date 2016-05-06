<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function(Blueprint $table){

            $table -> increments('id');
            $table -> integer('created_by') -> unique();
            $table -> string('first_name', 50);
            $table -> string('last_name', 50);
            $table -> string('address');
            $table -> string('city', 20);
            $table -> string('country', 20);
            $table -> string('zip_code', 10);
            $table -> string('bio');

            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profile');
    }
}
