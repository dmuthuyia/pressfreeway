<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Subsubcategory2 extends Model
{
    public $table = "subcategory2";

    protected $fillable = array('category2_id', 'title', 'description', 'url', 'subcategory2_img', 'tags');



    public function Articles()
    {
        return $this->hasMany('arodhaavms\Article');
    }

     

}

 
