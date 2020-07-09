<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = 'carts';

    protected $fillable = array('user_id', 'token_id', 'amount', 'total');

    public function Tokens()
    {

        return $this->belongsTo('arodhaavms\Token', 'token_id');

    }

    public function User()
    {

        return $this->belongsTo('arodhaavms\User', 'user_id');

    }

}
