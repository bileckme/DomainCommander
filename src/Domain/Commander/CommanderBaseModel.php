<?php namespace Domain\Commander;

use Domain\Commander\Events\EventGenerator;
use Watson\Validating\ValidatingTrait;

/**
 * Class CommanderBaseController
 * @package Domain\Commander
 */
class CommanderBaseModel extends \Model
{
    use ValidatingTrait;
    use EventGenerator;
    /**
     * @var bool
     */
    protected $throwValidationExceptions = true;
}
