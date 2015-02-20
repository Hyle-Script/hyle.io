<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Repositories\PasteRepository as PasteRepository;
use App\Repositories\CategoryRepository as CategoryRepository;

class PastesComposer {

	public function __construct(PasteRepository $paste, CategoryRepository $category)
	{
		$this->pasteRepository = $paste;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		// $data['paste'] = $this->pasteRepository->get();
		$view->with($data);
	}
}