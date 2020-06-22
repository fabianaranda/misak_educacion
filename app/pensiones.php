<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pensiones extends Model
{

        public $timestamps = false;	
        public $table = "pensiones"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         protected $fillable = [
             'id_pesiones','nombre_pensiones',
        ];
    
}