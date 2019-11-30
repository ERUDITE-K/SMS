<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rank extends Model
{
    protected $fillable=[
    	'name'
    ];

    public function employee(){
    	return $this->hasMany('App\employee');
    }
   



    
    
}
