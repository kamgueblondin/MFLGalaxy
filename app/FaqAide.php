<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqAide extends Model
{
   protected $fillable = ['name', 'email', 'message'];
}
