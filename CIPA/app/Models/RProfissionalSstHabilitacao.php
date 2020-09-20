<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RProfissionalSstHabilitacao extends Model
{

    protected $table = 'r_profissional_sst_habilitacoes';
    protected $_fillable = ['profissional_sst_id', 'habilitacoes'];
}
