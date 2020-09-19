<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{

    protected $table = 'palestrantes';
    protected $_fillable = ['nome', 'telefone', 'email', 'registro', 'cpf'];

    public function Habilitacoes()
    {
        return $this->hasMany(RPalestranteHabilitacao::class, "palestrante_id","id");
    }
}
