<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    public $timestamps = false;

    protected $fillable = [
    	'name',
    	'email',
    	'subject',
    	'message',
    	'created_at'
    ];
}
