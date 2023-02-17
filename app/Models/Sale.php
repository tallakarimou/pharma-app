<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function Client(){
        return $this->hasMany(Client::class);
    }

    public function Product(){
        return $this->hasMany(Product::class,'client_id','sale_id');
    }


}
