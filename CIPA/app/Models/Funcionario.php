<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Funcionario extends Model
{

    protected $table = 'funcionarios';
    protected $_fillable =['nome', 'cpf','telefone','setor','funcao'];

    public function Setor()
    {
        return $this->belongsTo("App\Model\Setor", 'setor');
    }

    public function Funcao()
    {
        return $this->belongsTo("App\Model\Funcao", 'funcao');
    }
}
