<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'order';

    protected $fillable = array('user_id', 'shipping_details', 'total');

    public function orderItems()
    {
        return $this->belongsToMany('pressfreeway\Token', 'order_product')->withPivot('amount', 'price', 'total');
    }

}
