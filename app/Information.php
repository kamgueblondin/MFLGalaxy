<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable=[
        'en', 'fr','es','de'
    ];
}
