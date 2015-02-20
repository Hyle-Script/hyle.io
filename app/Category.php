<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'demos_categories';

	public function demos()
	{
		return $this->hasMany('App\Demo', 'category_id');
	}
}