<?php namespace Meido\Form\Providers;

use Illuminate\Support\ServiceProvider;
use Meido\Form\Form;

class FormServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['form'] = $this->app->share(function($app)
		{
			return new Form($app);
		});
	}

}