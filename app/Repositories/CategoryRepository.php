<?php namespace App\Repositories;

use App\Category;
use App\Demo;

class CategoryRepository {


	public function __construct()
	{
	}

	public function all(array $related = [])
	{
		return Category::with($related)->get();
	}

	public function get($id, array $related = [])
	{
		return Category::with($related)->get()->find($id);
	}

	public function create($input)
	{
		return Category::create($input);
	}

	public function update($id, $input)
	{
		return Category::update($id, $input);
	}

	public function delete($id)
	{
		return Category::destroy($id);
	}
}