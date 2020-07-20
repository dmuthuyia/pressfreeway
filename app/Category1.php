<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    public $table = "category1";

    protected $fillable = array('title', 'description', 'url', 'category1_img', 'tags');



    public function Articles()
    {
        return $this->hasMany('pressfreeway\Article');
    }

     

}

 

