<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    public $table = "reactions";

    protected $fillable = array('article_id', 'region', 'country', 'ip', 'user_id');

    public function Article()
    {
        return $this->belongsTo('pressfreeway\Article');
        
    }

      public function Reaction()
    {
        return $this->belongsTo('pressfreeway\Reaction');
    }


      public function User()
    {
        return $this->belongsTo('pressfreeway\User');
    }

}

 

