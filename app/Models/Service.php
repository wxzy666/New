<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [ 'title' , 'subtitle' , 'desc' , 'pic' ,'current_price' , 'original_price' , 'teacher' , 'method' , 'obj' ,  'status' , 'content' ];
}
