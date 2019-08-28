<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table = 'departments';

    //primery key
    public $primery_key = 'id';


   public function students()
   {
       return $this->hasMany(student::class);
   }
}
