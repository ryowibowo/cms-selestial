<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransHeader extends Model
{
    protected $table = '10_trans_header';
    
    protected $primaryKey = 'notrans';

     protected $fillable = [
    	'tanggal','divisi', 'totalbuah', 'createby', 'createdate', 'lastby', 'lastupdate'
    ];

    protected $hidden = [
    	
    ];

     public $timestamps = false;
}
