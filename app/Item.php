<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    public $timestamps = false;

    protected $fillable = [
    	'name',
    	'price',
    	'status',
    	'description',
    	'created_at',
    ];
}
