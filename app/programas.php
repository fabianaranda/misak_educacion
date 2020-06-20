<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programas extends Model
{

        public $timestamps = false;	
        public $table = "programa"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         protected $fillable = [
             'nombre_programa ',
        ];
    
}