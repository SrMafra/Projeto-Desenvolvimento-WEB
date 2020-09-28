<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Epi extends Model
{

    protected $table = 'epis';
    protected $fillable =['equipamento', 'tipo_de_epi','data_de_compra','data_de_validade','status'];
    public $timestamps = false;

    public function TiposDeEpi()
    {
        return $this->belongsTo("App\Model\TipoDeEpi", 'tipos_De_Epis');
    }
}
