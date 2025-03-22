<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre_real', 'nombre_superheroe', 'foto_url', 'informacion_adicional'];
    protected $dates = ['deleted_at'];
}
