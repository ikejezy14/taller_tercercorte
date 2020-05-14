<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $fillable = [
        'marca', 'modelo', 'precio','usuario_id'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
