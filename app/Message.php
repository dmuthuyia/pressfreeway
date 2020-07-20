<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = "messages";

    protected $fillable = array('token_id', 'user_id', 'name', 'remarks', 'url', 'file_name');

    public function user()
    {
        return $this->belongsTo('pressfreeway\User');
    }

}
