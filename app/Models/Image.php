<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product_image';
    protected $fillable = [
         'link_img','product_id'
    ];
   
    public $timestamps = false;

    

}
