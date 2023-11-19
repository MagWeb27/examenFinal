<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiante';

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'email',
        'telefono',
        'carrera_id',
    ];

    public function carreras() {
        return $this->belongsToMany(Carrera::class);
    }
}
