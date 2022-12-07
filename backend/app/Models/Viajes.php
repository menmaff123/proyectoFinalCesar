<?php

namespace App\Models;

use App\Models\Lugares_Viajes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Viajes extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'image'
    ];

    public function lugaresviajes()
    {
        return $this->hasMany(Lugares_Viajes::class, 'id_viaje', 'id');
    }
}
