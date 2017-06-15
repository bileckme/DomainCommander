<?php namespace Domain\Commander;

use Illuminate\Support\ServiceProvider;

class CommanderServiceProvider extends ServiceProvider
{

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
        $this->package('domain/commander');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommandTranslator();
        $this->registerCommandBus();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['commander'];
    }

  /**
   * Registers the Command Translator
   */
  protected function registerCommandTranslator()
  {
      $this->app->bind('Domain\Commander\Commands\CommandTranslator',
                       'Domain\Commander\Commands\BaseCommandTranslator');
  }

  /**
   * Registers the Command Bus
   */
  protected function registerCommandBus()
  {
      $this->app->bindShared('Domain\Commander\Commands\CommandBus', function () {
          return $this->app->make('Domain\Commander\Commands\ValidationCommandBus');
      });
  }
}
