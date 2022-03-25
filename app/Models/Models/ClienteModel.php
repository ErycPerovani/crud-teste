<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table='cliente';

    public function relUser()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
