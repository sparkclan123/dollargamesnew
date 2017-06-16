<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fillable extends Model
{
  protected $fillable = ['id','username','balance','bankdeposit','accountnumberdeposit','accontnamedeposit','datetime','channeldeposit','tel','opinion'];

}
