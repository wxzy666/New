<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [ 'title' , 'subtitle' , 'desc' , 'pic' ,'range' , 'method' , 'obj' ,  'status' , 'content' ];
}