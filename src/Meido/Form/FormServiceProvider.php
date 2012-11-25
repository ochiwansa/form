<?php namespace Meido\HTML;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @param  Illuminate\Foundation\Application  $app
	 * @return void
	 */
	public function register($app)
	{
		$app['form'] = $app->share(function($app)
		{
			return new Form($app);
		});
	}

}