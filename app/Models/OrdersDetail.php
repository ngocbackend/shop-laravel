<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class OrdersDetail extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'orders_detail';
    protected $fillable = [
        'orders_id', 'product_id', 'quantity', 'price'
    ];

    public function pro()
   {
   	return $this->hasOne(Product::class,'id','product_id');
   }

    

}
