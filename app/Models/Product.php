<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'price',
        'detail',

    ];

        public function clients(){

            return $this->belongsToMany(Client::class);
        }

        public function suppliers(){

            return $this->belongsToMany(Supplier::class);
        }

        public function stocks()
        {
            return $this->hasOne(Stock::class);
        }

}

