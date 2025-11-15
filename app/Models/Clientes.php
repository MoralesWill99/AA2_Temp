<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'Clientes'; //nombre de la tabla en la base de datos
    protected $primaryKey = 'Id_cliente'; //Clave primaria
    public $timestamps = false; //Si la tabla no tiene campos created_at y updated_at
    protected $fillable =['Nombre', 'Correo', 'Direccion', 'Rol', 'contrasena'];  //Campos a rellenar en mi tabla de SQL
}