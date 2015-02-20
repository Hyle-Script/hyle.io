<?php namespace App\Repositories;

use App\Article;

class ArticleRepository {

	public function __construct()
	{
	}

	public function all(array $related = [])
	{
		return Article::with($related)->orderBy('publish_date', 'desc')->get();
	}

	public function get($id, array $related = [])
	{
		return Article::with($related)->get()->find($id);
	}

	public function getBySlug($slug, array $related = [])
	{
		return Article::with($related)->whereSlug($slug)->first();
	}

	public function create($input)
	{
		return Article::create($input);
	}

	public function update($id, $input)
	{
		return Article::update($id, $input);
	}

	public function delete($id)
	{
		return Article::destroy($id);
	}
}