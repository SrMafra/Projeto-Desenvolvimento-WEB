<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadastarAdvertencia extends Model
{

    protected $table = 'epis';
    protected $_fillable =[]; //falta acrescentar os dados

    public function TiposDeEpis()
    {
        return $this->belongsTo("App\Model\TipoDeEpis", 'tipos_De_Epis');
    }
}
