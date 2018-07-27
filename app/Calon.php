<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $table = 'calon';
    protected $guarded = [];


    public function sesi() {
    	return $this->belongsTo('App\Sesi', 'sesi_id', 'id');
    }

}
