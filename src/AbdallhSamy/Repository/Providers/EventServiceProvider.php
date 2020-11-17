<?php
namespace AbdallhSamy\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class EventServiceProvider
 * @package AbdallhSamy\Repository\Providers
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'AbdallhSamy\Repository\Events\RepositoryEntityCreated' => [
            'AbdallhSamy\Repository\Listeners\CleanCacheRepository'
        ],
        'AbdallhSamy\Repository\Events\RepositoryEntityUpdated' => [
            'AbdallhSamy\Repository\Listeners\CleanCacheRepository'
        ],
        'AbdallhSamy\Repository\Events\RepositoryEntityDeleted' => [
            'AbdallhSamy\Repository\Listeners\CleanCacheRepository'
        ]
    ];

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        $events = app('events');

        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * Get the events and handlers.
     *
     * @return array
     */
    public function listens()
    {
        return $this->listen;
    }
}
