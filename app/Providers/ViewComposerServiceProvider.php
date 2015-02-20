<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('site.layouts.app', 'App\Http\Composers\LayoutComposer');
		view()->composer('site.resources.demo.*', 'App\Http\Composers\DemosComposer');
		view()->composer('site.resources.article.*', 'App\Http\Composers\ArticlesComposer');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
