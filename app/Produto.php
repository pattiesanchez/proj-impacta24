<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade'];

    // public function produtoDetalhe() {
    //     return $this->hasOne('App\Item');
    // }

    public function fornecedor()
{
    return $this->belongsTo(Fornecedor::class);
}

}
