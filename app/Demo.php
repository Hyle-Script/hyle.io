<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model {

	public function category()
	{
		return $this->belongsTo('Category', 'category_id');
	}


	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

}