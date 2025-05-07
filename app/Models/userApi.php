<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class userApi extends Model
{
   
    protected $fillable = [
            'firstName',
            'lastName',
            'email',
            'dob',
            'phone',
            'cell',
            'id_name',
            'id_number',
            'registered_date',
            'gender',
            'picture',
    ];
}
