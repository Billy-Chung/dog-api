<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DogHome extends Model
{
    protected $table = 'home';
    protected $dates = ['deleted_at'];
}
