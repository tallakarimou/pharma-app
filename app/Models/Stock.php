<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    protected $dates = ['expire_at'];
    protected $fillable = [
        'quantity',
        'expire_at',
        'product_id',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
