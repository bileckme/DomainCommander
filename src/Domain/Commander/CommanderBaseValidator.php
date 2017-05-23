<?php namespace Domain\Commander;
use Illuminate\Validation\Factory as Validator;
class CommanderBaseValidator
{
    /**
     * @var
     */
    protected $validator;
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

}