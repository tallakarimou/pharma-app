<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tel',
        'adress',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
