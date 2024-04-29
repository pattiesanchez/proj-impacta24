<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade', 'fornecedor_id'];

    public function itemDetalhe() {
        return $this->hasOne('App\ItemDetalhe', 'id', 'id');
    }

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }
}
