<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Grant extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }

    
}
