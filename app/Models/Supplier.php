<?php

namespace App\Models;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tel',
        'adress',
    ];

    public function products()
    {
        return $this->belongstoMany(Product::class)->withPivot(['quantity']);
    }


}
