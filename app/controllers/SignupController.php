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
        $post = $this->request->getPost();

        // Store and check for errors
        $user        = new Users();
        $user->name  = $post['name'];
        $user->email = $post['email'];
        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }
}
