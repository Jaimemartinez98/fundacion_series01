<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    protected $fillable = [
        'id','nombre_perfil','created_at','updated_at'
    ];

}
