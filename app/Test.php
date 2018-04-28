<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
  class Test extends Model
  {
   protected $table = 'test';
   public function user()
   {
   //	return User::where('id',$this->user_id)->first()->name;
   	return $this->belongsTo('\App\User');
   }

  }
