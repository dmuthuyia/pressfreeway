<?php
namespace pressfreeway;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'articles';

    protected $fillable = array('title', 'article_body', 'user_id', 'category1_id', 'subcategory1_id', 'category2_id', 'subcategory2_id', 'likes', 'dislikes', 'url', 'tags');

    public function Reactions()
    {
        return $this->hasMany('pressfreeway\Reactions');
    }

    public function Views()
    {
        return $this->hasMany('pressfreeway\View');
    }

    public function User()
    {
        return $this->belongsTo('pressfreeway\User');
    }

    public function Category1()
    {
        return $this->belongsTo('pressfreeway\Category1');
    }

    public function Category2()
    {
        return $this->belongsTo('pressfreeway\Category2');
    }

    public function Subcategory1()
    {
        return $this->belongsTo('pressfreeway\Subcategory1');
    }

    public function Subcategory2()
    {
        return $this->belongsTo('pressfreeway\Subcategory2');
    }

}
