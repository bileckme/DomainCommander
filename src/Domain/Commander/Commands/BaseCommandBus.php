<?php namespace Domain\Commander\Commands;

use Illuminate\Foundation\Application;

class BaseCommandBus implements CommandBus
{
    /**
     * @var Application
     */
    private $app;

    /**
     * @var CommandTranslator
     */
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

    /**
     * Executes a command
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);
        return $this->app->make($handler)->handle($command);
    }
}
