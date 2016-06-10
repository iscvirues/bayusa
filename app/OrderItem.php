<?php

namespace bayusa;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['price','quantity','product_id','order_id'];

    public function order(){
    	return $this->belongsTo('bayusa\Order');
    }

    public function product(){
    	return $this->belongsTo('bayusa\Product');
    }
}