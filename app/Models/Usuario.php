<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    protected $table = 'usuarios';

    public function rol(){
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    protected $casts = ['entry_date' => 'datetime'];
}
