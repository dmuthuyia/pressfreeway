<?php
namespace arodhaavms;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'articles';

    protected $fillable = array('title', 'article_body', 'user_id', 'category1_id', 'subcategory1_id', 'category2_id', 'subcategory2_id', 'likes', 'dislikes', 'url', 'article_img', 'tags');

    public function Reactions()
    {
        return $this->hasMany('arodhaavms\Reactions');
    }

    public function Views()
    {
        return $this->hasMany('arodhaavms\View');
    }

      public function User()
    {
        return $this->belongsTo('arodhaavms\User');
    }

      public function Category1()
    {
        return $this->belongsTo('arodhaavms\Category1');
    }

      public function Category2()
    {
        return $this->belongsTo('arodhaavms\Category2');
    }

      public function Subcategory1()
    {
        return $this->belongsTo('arodhaavms\Subcategory1');
    }

      public function Subcategory2()
    {
        return $this->belongsTo('arodhaavms\Subcategory2');
    }

}
