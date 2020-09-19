<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Treinamento extends Model
{

    protected $table = 'treinamentos';
    protected $_fillable =['titulo', 'descricao','data_inicial','data_final','carga_horaria','palestrante_convidado','palestrante_da_empresa'];

    public function Palestrante() //corresponde ao palestrante convidado
    {
        return $this->belongsTo("App\Model\Palestrante", 'nome');
    }

    public function ProfissionalSst() // corresponde ao palestrnate da empresa
    {
        return $this->belongsTo("App\Model\ProfissionalSst", 'nome');
    }
}
