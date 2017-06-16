<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Withdrawal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
  		Schema::create('withdrawal', function(Blueprint $table) {


  		    $table->increments('id');
  		    $table->string('username');
  		    $table->integer('balance');
  		    $table->string('bankwithdrawal');
  		    $table->string('accountnumberwithdrawal');
  		    $table->string('accountnamewithdrawal');
  		    $table->string('datetime');
  		    $table->string('channelwithdraw');
  		    $table->string('tel');
  		    $table->string('opinion');


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
  		Schema::drop('withdrawal');

      }

}
