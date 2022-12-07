<?php

namespace App\Models;

use App\Models\Viajes;
use App\Models\Lugares;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lugares_Viajes extends Model
{
    use HasFactory;

    protected $fillable = [
        'Notas',
        'id_lugar',
        'id_viaje'
    ];

    public function lugar(){
        return $this->belongsTo(Lugares::class,'id_lugar','id');
    }

    public function viaje(){
        return $this->belongsTo(Viajes::class,'id_viaje','id');
    }
}
