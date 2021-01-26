<?php

namespace Models\Grade;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model 
{

    protected $table = 'Grades';
    public $timestamps = true;
    protected $fillable = array('name', 'notes');

}