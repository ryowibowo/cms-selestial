<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
	protected $table = '00_kriteria_buah';
    
    protected $primaryKey = 'id';

     protected $fillable = [
    	'name','createby', 'lastby', 'lastby', 'lastupdate'
    ];

    protected $hidden = [
    	
    ];

     public $timestamps = false;
}
