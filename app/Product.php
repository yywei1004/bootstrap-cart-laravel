<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property int $price
 * @property string $intro
 * @property int $stock
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'price', 'intro', 'stock', 'created_at', 'updated_at'];

    public function imgs(){
        return $this->hasMany('App\ProductImg','product_id','id');
    }

    public function shoppingcart(){
        return $this->hasMany(ShoppingCart::class,'user_id','id');
    }

    public function order_detail(){
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
}
