<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'monto_de_dinero',
        'fecha_inicial',
        'fecha_fin',
    ];
    public function user(){
        return $this->hasOne(User::class);
    }
}
