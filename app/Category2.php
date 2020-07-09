<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Category2 extends Model
{
    public $table = "category2";

    protected $fillable = array('title', 'description', 'url', 'category2_img', 'tags');



    public function Articles()
    {
        return $this->hasMany('arodhaavms\Article');
    }

     

}

 

