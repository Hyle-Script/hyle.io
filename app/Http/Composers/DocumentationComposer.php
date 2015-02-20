<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class DocumentationComposer {

	public function __construct()
	{

	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with($data);
	}
}