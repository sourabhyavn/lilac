<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    public function department(){
      return  $this->belongsTo('App\Models\Department','id','name');
    }
    public function designation(){
      return  $this->belongsTo('App\Models\Designation','id','name');
    }
}
