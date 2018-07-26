<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = 'sesi';

    //tak lalu kat form
    protected $guarded = [];

    //OR ; yg lalu form
    //protected $fillable = [];
}
