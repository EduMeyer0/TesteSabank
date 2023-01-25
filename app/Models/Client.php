<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function adress()
    {
        return $this->hasOne('App\Models\Adress', 'client_cpf', 'cpf');
    }
}
