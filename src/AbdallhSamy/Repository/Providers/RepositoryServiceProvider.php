<?php
namespace AbdallhSamy\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package AbdallhSamy\Repository\Providers
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../../resources/config/repository.php' => config_path('repository.php')
        ]);

        $this->mergeConfigFrom(__DIR__ . '/../../../resources/config/repository.php', 'repository');

        $this->loadTranslationsFrom(__DIR__ . '/../../../resources/lang', 'repository');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('AbdallhSamy\Repository\Generators\Commands\RepositoryCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\TransformerCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\PresenterCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\EntityCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\ValidatorCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\ControllerCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\BindingsCommand');
        $this->commands('AbdallhSamy\Repository\Generators\Commands\CriteriaCommand');
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
