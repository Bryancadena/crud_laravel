<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='tareas';
    protected $fillable=[
    'nombre',
    'descripcion',
    'finalizada',
    'fecha_limite',
    'urgencia'];

    protected $dates=['fecha_limite'];// convierte la fecha con carbon para realizar operaciones
}
