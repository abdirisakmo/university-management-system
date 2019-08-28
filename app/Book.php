<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //table name
    protected $table ='books';

    public  $timestamps = true;
}
