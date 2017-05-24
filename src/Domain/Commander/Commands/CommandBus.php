<?php namespace Domain\Commander\Commands;

interface CommandBus
{
    public function execute($command);
}
