<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $guarded= ['*'];
    public function Product(){
        return $this->belongsTo(Product::class,'or_product_id');
    }
    public function Transaction(){
        return $this->belongsTo(Transaction::class,'or_transaction_id');
    }
}
