<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
    ];

    public function user()
    {
        //Los tweets pertenecen a un user
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
