<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'date' => 'required',
        'title' => 'required',
        'price' => 'required'
        
        );
}
