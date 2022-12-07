<?php

namespace App\Models;

use App\Models\Lugares_Viajes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lugares extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Latitud',
        'Longitud',
        'id_poblacion',
        'image'
    ];

    public function lugaresviajes()
    {
        return $this->hasMany(Lugares_Viajes::class, 'id_lugar', 'id');
    }
}
