<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    public $table = "reactions";

    protected $fillable = array('article_id', 'region', 'country', 'ip', 'user_id');

    public function Article()
    {
        return $this->belongsTo('arodhaavms\Article');
        
    }

      public function Reaction()
    {
        return $this->belongsTo('arodhaavms\Reaction');
    }


      public function User()
    {
        return $this->belongsTo('arodhaavms\User');
    }

}

 

