<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Orders extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'orders';
    protected $fillable = [
        'users_id', 'email', 'name', 'phone', 'address', 'status'
    ];

     public function user(){
    return $this->hasOne(Users::class, 'id', 'users_id');
    }

     public function total_amount(){
   		$order_detail = OrdersDetail::where('orders_id',$this->id)->get();
   		$t=0;
   		foreach($order_detail as $dt){
   			$t += $dt->quantity*$dt->price;
   		}
   		return $t;
   }

    

}
