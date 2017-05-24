<?php namespace Domain\Commander\Commands;

/**
 * Interface CommandHandler
 * @package Domain\Commander\Commands
 */
interface CommandHandlerInterface
{
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command);
}
