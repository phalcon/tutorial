<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

/**
 * Class IndexController
 *
 * @property View $view
 */
class IndexController extends Controller
{
    /**
     * Welcome and user list
     */
    public function indexAction()
    {
        $this->view->users = Users::find();
    }
}
