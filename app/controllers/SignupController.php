<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
    /**
     * Show form to register a new user
     */
    public function indexAction()
    {
    }

    /**
     * Register new user and show message
     */
    public function registerAction()
    {
        $user = new Users();

        // Store and check for errors
        $success = $user->save(
            $this->request->getPost(),
            ['name', 'email']
        );

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>" . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }
}
