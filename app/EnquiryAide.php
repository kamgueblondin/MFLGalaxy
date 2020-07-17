<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnquiryAide extends Model
{
    protected $fillable = ['name', 'number', 'email', 'message'];
}
