<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['id', 'unidade'];

    public function item() {
        return $this->belongsTo('App\Item', 'id', 'id');
    }
}
