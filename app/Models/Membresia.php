<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    protected $table = 'membresia';

    protected $primaryKey = 'membresia_id';

    protected $fillable = ['fecha_expedicion', 'fecha_expiracion'];
}
