<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Funcionario extends Model
{

    protected $table = 'funcionarios';
    protected $fillable =['nome', 'cpf','telefone','setor','funcao'];
    public $timestamps = false;

    public function Setor()
    {
        return $this->belongsTo("App\Model\Setor", 'setor');
    }

    public function Funcao()
    {
        return $this->belongsTo("App\Model\Funcao", 'funcao');
    }
}
