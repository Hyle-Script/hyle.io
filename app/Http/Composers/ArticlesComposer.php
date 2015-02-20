<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Repositories\ArticleRepository as ArticleRepository;

class ArticlesComposer {

	public function __construct(ArticleRepository $article)
	{
		$this->articleRepository = $article;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$data['articles'] = $this->articleRepository->all();
		$view->with($data);
	}
}