<?php
namespace AbdallhSamy\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LumenRepositoryServiceProvider
 * @package AbdallhSamy\Repository\Providers
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class LumenRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('AbdallhSamy\Repository\Generators\Commands\RepositoryCommand');
        $this->app->register('AbdallhSamy\Repository\Providers\EventServiceProvider');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
