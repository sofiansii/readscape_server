<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['userId'];
    protected $visible = ['id','userId','orderLines'];

    public function orderLines(){
        return $this->hasMany(OrderLines::class, 'orderId');
    }

    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
}
