<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransDetail extends Model
{
    protected $table = '10_trans_detail';
    
    protected $primaryKey = 'id';

     protected $fillable = [
    	'notrans','id_buah', 'jumlah','lastby', 'lastupdate'
    ];

    protected $hidden = [
    	
    ];

     public $timestamps = false;
}
