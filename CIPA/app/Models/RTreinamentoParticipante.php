<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RTreinamentoParticipante extends Model
{

    protected $table = 'r_treinamentos_participantes';
    protected $_fillable = ['treinamentos_id', 'participantes'];
}
