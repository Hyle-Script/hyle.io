<?php namespace App\Repositories;

use App\Demo;

class DemoRepository {

	public function __construct()
	{
	}

	public function all(array $related = [])
	{
		return Demo::with($related)->get();
	}

	public function get($id, array $related = [])
	{
		return Demo::with($related)->get()->find($id);
	}

	public function create($input)
	{
		return Demo::create($input);
	}

	public function update($id, $input)
	{
		return Demo::update($id, $input);
	}

	public function delete($id)
	{
		return Demo::destroy($id);
	}
}