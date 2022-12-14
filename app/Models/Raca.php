<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    use HasFactory;

    protected $fillable = ['raca', 'sexo', 'cor'];

    public function animals() {
        return $this->hasMany('App\Models\Animal');
    }
}
