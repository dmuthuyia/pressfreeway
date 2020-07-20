<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $table = "reaction";

    protected $fillable = array('title', 'description', 'url', 'reaction_img', 'unicode');
    

    public function Reactions()
    {
        return $this->hasMany('pressfreeway\Reactions');
    }



}

 

