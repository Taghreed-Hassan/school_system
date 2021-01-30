<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model 
{

    use HasTranslations;
    protected $table = 'Grades';

    public $translatable = ['name','notes']; //column use trans
    
    public $timestamps = true;
    protected $fillable=['name','notes'];

}