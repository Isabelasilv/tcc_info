<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $fillable = ['periodo', 'kmatual', 'kmtotal', 'tempo'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
 