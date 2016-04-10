<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'status'
    ];

    /**
     * Relation to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relation to orderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordersDetail()
    {
        return $this->hasMany('App\Models\OrdersDetail');
    }

    const ORDER_UNVIEW = 0;
    const ORDER_PENDING = 1;
    const ORDER_SEND = 2;
    const ORDER_DROP = 3;

    protected $titleStatus = ['Untested', 'Pending', 'Sent', 'Drop'];
    protected $cssStatus = ['label-info', 'label-warning', 'label-success', 'label-danger'];

    /**
     * Return title of status.
     *
     * @param array $status array title for status
     *
     * @return mixed
     */
    public function getTitleStatus($status)
    {
        return $this->titleStatus[$status];
    }

    /**
     * Return css of status
     *
     * @param array $status array css for status
     *
     * @return mixed
     */
    public function getCssStatus($status)
    {
        return $this->cssStatus[$status];
    }
}
