<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'telefono','direccion','email',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function autos(){
        return $this->hasMany('App\Auto');
    }
}
