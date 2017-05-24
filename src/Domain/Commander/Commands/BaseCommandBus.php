<?php namespace Domain\Commander\Commands;

use Illuminate\Foundation\Application;

class BaseCommandBus implements CommandBus
{
    private $app;
    protected $commandTranslator;
    /**
     * @param Application       $app
     * @param CommandTranslator $commandTranslator
     */
    public function __construct(Application $app, CommandTranslator $commandTranslator)
    {
        $this->app = $app;
        $this->commandTranslator = $commandTranslator;
    }
    public function execute($command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);
        return $this->app->make($handler)->handle($command);
    }
}
