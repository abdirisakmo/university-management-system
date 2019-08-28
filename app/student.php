<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';

    public $primery_key = 'id';

    public  $timestamps = true;
    // public function department(){
       
    //         return $this->belongsTo('App\department', 'department_id', 'id');
        
    // }
    // $student->department->department_name;

      public function departments()
      {
          return $this->belongsTo(department::class);
      }
    
}

