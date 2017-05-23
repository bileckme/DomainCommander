<?php namespace Domain\Commander\Commands;

interface CommandTranslator
{
    public function toCommandHandler($command);
    public function toValidator($command);
}