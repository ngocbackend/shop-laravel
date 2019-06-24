<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product';
    protected $fillable = [
        'name', 'slug', 'img','price','sale_price','content','category_id'
    ];

    public function category()
    {
    	return $this->hasOne(Category::class , 'id','category_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class ,'product_id','id');
    }

    public function sale()
    {
        return $this->belongsTo(OrdersDetail::class , 'product_id')->orderBy('quantity','desc');
    }

}
