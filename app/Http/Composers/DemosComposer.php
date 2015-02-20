<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Repositories\DemoRepository as DemoRepository;
use App\Repositories\CategoryRepository as CategoryRepository;

class DemosComposer {

	public function __construct(DemoRepository $demo, CategoryRepository $category)
	{
		$this->demoRepository     = $demo;
		$this->categoryRepository = $category;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$data['categories'] = $this->categoryRepository->all(['demos']);
		$view->with($data);
	}
}