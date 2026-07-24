<?php

declare(strict_types=1);

namespace Tutorial\Models;

use Phalcon\Mvc\Model;

class Users extends Model
{
    /** @var string|null */
    public $email;

    /** @var int|null */
    public $id;

    /** @var string|null */
    public $name;
}
