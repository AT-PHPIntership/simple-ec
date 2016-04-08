<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{
    protected $table = 'orders_details';

    protected $fillable = [
        'order_id', 'product_id','quantity','price'
    ];

    /**
     * Relation to order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    /**
     * Relation to product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
