<?php

declare(strict_types=1);

namespace Tutorial\Controllers;

use Phalcon\Mvc\Controller;
use Tutorial\Models\Users;

class IndexController extends Controller
{
    /**
     * Welcome and user list
     */
    public function indexAction(): void
    {
        $this->view->users = Users::find();
    }
}
