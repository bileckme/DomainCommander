<?php namespace Domain\Commander;
use Domain\Commander\Commands\CommandBus;
/**
 * Class CommanderBaseController
 * @package Domain\Commander
 */
class CommanderBaseController extends \BaseController
{
    /**
     * @var CommandBus
     */
    protected $commandBus;
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }
    /**
     * @param $command
     */
    protected function execute($command)
    {
        $this->commandBus->execute($command);
    }
}