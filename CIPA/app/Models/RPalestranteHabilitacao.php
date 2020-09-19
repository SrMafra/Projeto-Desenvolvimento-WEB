<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RPalestranteHabilitacao extends Model
{

    protected $table = 'r_palestrante_habilitacoes';
    protected $_fillable = ['palestrante_id', 'habilitacoes'];
}
