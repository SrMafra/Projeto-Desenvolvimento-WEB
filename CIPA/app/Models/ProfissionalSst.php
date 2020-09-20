<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{

    protected $table = 'palestrantes';
    protected $_fillable = ['nome', 'telefone', 'email', 'registro', 'cpf'];

    public function Habilitacoes()
    {
        return $this->hasMany(RProfissionalSstHabilitacao::class, "profissional_sst_id","id");
    }
}
