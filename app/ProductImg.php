<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $image_path
 * @property int $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class ProductImg extends Model
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
    protected $fillable = ['image_path', 'product_id', 'created_at', 'updated_at'];

}
