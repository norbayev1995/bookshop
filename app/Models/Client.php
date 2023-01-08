<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'passport_number',
        'phone_number',
        'birth_date',
        'status'
    ];

    public function order()
    {
        $this->hasMany(Order::class, 'client_id', 'id');
    }
}
