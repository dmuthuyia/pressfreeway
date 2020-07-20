<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    public $table = "views";

    protected $fillable = array('article_id', 'region', 'country', 'ip', 'user_id');

    public function Article()
    {
        return $this->belongsTo('pressfreeway\Article');
    }

}

 

