<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertencia extends Model {

    protected $table = 'advertencias';
    protected $_fillable = ['motivo', 'descricao', 'tecnico_responsvel','funcionario','data'];

    public function ProfissionalSst() // corresponde ao tecnico responsavel 
    {
        return $this->belongsTo("App\Model\ProfissionalSst", 'nome');
    }

    public function Funcionario()
    {
        return $this->belongsTo("App\Model\Funcionario", 'nome');
        
    }
}
