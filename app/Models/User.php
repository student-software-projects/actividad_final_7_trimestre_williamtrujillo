<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table ='usuarios';
    protected $primaryKey ='id';
    protected $fillable =[
       'nombre','email','contraseña'
   ];

   protected $hidden=[
       'password'
       ];
}
