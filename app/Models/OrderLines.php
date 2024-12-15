<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLines extends Model
{

    protected $fillable = ['book_id','price','quantity','orderId'];
    protected $visible = ['book_id','price','quantity','orderId'];


    public function order(){
        return $this->belongsTo(Order::class,'orderId', 'id');
    }

    /** @use HasFactory<\Database\Factories\OrderLinesFactory> */
    use HasFactory;
}
