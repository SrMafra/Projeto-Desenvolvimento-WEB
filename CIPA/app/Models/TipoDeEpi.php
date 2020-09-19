<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDeEpi extends Model
{

    protected $table = 'tipos_de_epi';
    protected $_fillable = ['tipo', 'descricao'];
}
