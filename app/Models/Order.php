<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function orderLines(){
        return $this->hasMany(OrderLines::class);
    }

    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
}
