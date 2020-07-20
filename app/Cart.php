<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = 'carts';

    protected $fillable = array('user_id', 'token_id', 'amount', 'total');

    public function Tokens()
    {

        return $this->belongsTo('pressfreeway\Token', 'token_id');

    }

    public function User()
    {

        return $this->belongsTo('pressfreeway\User', 'user_id');

    }

}
