<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class LayoutComposer {

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

		$viewData = $view->getData();
		$defaults = [
			'title'    => 'Hyle — A new way to create & share After Effects content.',
			'description' => 'Hyle is an After Effects script allowing you to generate content from an elegant, readable and future-proof text syntax.',
			'pagename' => 'default',
			'image'    => 'http://hyle.io/assets/site/images/hyle.png',
			'aws' => 'http://s3.amazonaws.com/sebastienlavoie.hyle/'
		];

		$data = $viewData + $defaults;
		$view->with($data);

	}

}