<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table='cliente';

    public function relUsers()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
