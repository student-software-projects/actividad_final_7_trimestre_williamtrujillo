<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table ='propietarios';
    protected $primaryKey ='id';
    protected $fillable =[
        'num_cedula','prim_nombre','seg_nombre','apellidos','direccion','telefono','ciudad'
    ];
    use HasFactory;

}
