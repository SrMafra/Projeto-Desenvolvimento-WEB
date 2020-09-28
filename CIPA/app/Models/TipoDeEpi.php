<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDeEpi extends Model
{

    protected $table = 'tipos_de_epi';
    protected $fillable = ['tipo', 'descricao'];
    public $timestamps = false;
}
