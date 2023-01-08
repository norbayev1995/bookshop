<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'current_quantity',
        'status'
    ];

    public function book()
    {
        $this->hasMany(Order::class, 'book_id', 'id');
    }
}
