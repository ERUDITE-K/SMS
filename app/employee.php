<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
     protected $fillable=[
     	'firstname',
     	'lastname',
     	'othername',
          'institution_id',
          'rank_id',
          'sex',
          'email',
          'phone',
          'address',
          'place_of_residence',
          'nationality',
          'location',
          'date_employed',
          'image'
     	
     ];

     public function institution(){
     	return $this->belongsTo('App\institution');
     }

     public function rank(){
     	return $this->belongsTo('App\rank');
     }
}
