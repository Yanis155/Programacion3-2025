<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
   
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'dni',
        'birthday'
    ];

    public function grants(){
        return $this->hasMany(Grant::class);
    }

    

}
