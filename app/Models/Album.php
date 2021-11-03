<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    public function photo(){
        return $this->hasMany('App\Models\Photo');
    }
}
