<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'username', 'senha', 'isCanil'];

    public function endereco() {
        return $this->hasOne('App\Models\Endereco');
    }
}
