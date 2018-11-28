<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{
    protected $fillable = ['nome', 'categoria', 'descricao', 'url', 'user_id'];
    protected $table = 'monografias';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
