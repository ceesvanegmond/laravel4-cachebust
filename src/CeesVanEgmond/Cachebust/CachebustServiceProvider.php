<?php namespace CeesVanEgmond\Cachebust;

use Illuminate\Support\ServiceProvider;

class CachebustServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ceesvanegmond/cachebust');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['cachebust'] = $this->app->share(function($app)
        {
            return new Cachebust;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('cachebust');
	}

}