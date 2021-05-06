<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'name', 'email', 'message','phone',
    ];//end of fillable

}//end of model
