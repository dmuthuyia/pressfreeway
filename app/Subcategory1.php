<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Subsubcategory1 extends Model
{
    public $table = "subcategory1";

    protected $fillable = array('category1_id', 'title', 'description', 'url', 'subcategory1_img', 'tags');



    public function Articles()
    {
        return $this->hasMany('arodhaavms\Article');
    }

     

}

 

