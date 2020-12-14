<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table ='vehiculos';
    protected $primaryKey ='id';
    protected $fillable =[
        'placa','color','marca','tp_vehiculo','fk_propietarios','fk_conductores'
    ];
    use HasFactory;
    public function propietarios()
    {
        return $this->belongsTo(Conductor::class,'fk_conductores','id');
    }
    public function conductores()
    {
        return $this->belongsTo(Propietario::class,'fk_propietarios','id');
    }
}
