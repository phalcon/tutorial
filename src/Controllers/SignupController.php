<?php

declare(strict_types=1);

namespace Tutorial\Controllers;

use Phalcon\Mvc\Controller;
use Tutorial\Models\Users;

class SignupController extends Controller
{
    /**
     * Show the form to register a new user
     */
    public function indexAction(): void
    {
    }

    /**
     * Register a new user and show a message
     */
    public function registerAction(): void
    {
        $post = $this->request->getPost();

        $user        = new Users();
        $user->name  = $post['name'];
        $user->email = $post['email'];

        $success = $user->save();

        $this->view->success = $success;

        if ($success) {
            $message = 'Thanks for registering!';
        } else {
            $message = 'Sorry, the following problems were generated:<br>'
                . implode('<br>', $user->getMessages());
        }

        $this->view->message = $message;
    }
}
