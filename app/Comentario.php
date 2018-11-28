<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['user_id', 'monografia_id', 'titulo', 'descricao'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }
}
