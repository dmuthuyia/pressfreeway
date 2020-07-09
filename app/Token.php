<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $table = "tokens";

    protected $fillable = array('title', 'description');

    public function user()
    {
        return $this->belongsTo('arodhaavms\User');
    }

    public function cart()
    {
        return $this->belongsTo('arodhaavms\Cart');
    }

}
