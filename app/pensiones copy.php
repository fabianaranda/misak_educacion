<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nivel_academico extends Model
{

        public $timestamps = false;	
        public $table = "nivel_academico"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         protected $fillable = [
             'id_nivel_academico','nombre_nivel',
        ];
    
}