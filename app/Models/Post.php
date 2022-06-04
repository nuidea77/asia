<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use Translatable;
	protected $translatable = ['title', 'body', 'excerpt'];

    public function category()
	{
	    return $this->belongsTo('App\Models\Category', 'category_id');
	}

	public function author()
	{
	    return $this->belongsTo('App\User', 'author_id');
	}


}
