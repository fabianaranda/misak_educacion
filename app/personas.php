<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{

        public $timestamps = false;	
        public $table = "personas"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         protected $fillable = [
             'codigo','documento_identidad',
        ];
    
}