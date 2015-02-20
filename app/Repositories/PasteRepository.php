<?php namespace App\Repositories;

use App\Paste;
use App\Demo;

class PasteRepository {


	public function __construct()
	{
	}

	public function all(array $related = [])
	{
		return Paste::with($related)->get();
	}

	public function get($id, array $related = [])
	{
		return Paste::with($related)->get()->find($id);
	}

	public function create($input)
	{
		return Paste::create($input);
	}

	public function update($id, $input)
	{
		return Paste::update($id, $input);
	}

	public function delete($id)
	{
		return Paste::destroy($id);
	}
}