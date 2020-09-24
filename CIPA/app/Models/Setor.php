<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{

    protected $table = 'setores';
    protected $fillable = ['setor', 'descricao'];
    public $timestamps = false;
}
