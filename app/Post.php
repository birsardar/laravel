<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'heading', 'description',  'category_id','author_id','image',
    ];
  	public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function author()
    {
        return $this->belongsTo('App\Author', 'author_id');
    }
}
