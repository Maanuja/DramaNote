<?php

namespace App;

use App\controller\PostController;
use App\controller\UserController;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;
        $postController = new PostController();
        $userController = new UserController();
        if (isset($_GET['route'])) {
            if ('post' === $route && $action) {
                if ('create' === $action) {
                    return $postController->create();
                } elseif ('read' === $action && isset($_GET['id'])) {
                    return $postController->read($_GET['id']);
                }
                elseif ('update' === $action && isset($_GET['id'])) {
                    $postController->update($_GET['id']);
                } elseif ('delete' === $action && isset($_GET['id'])) {
                    $postController->delete($_GET['id']);
                } 
            } elseif ('contact' === $route) {
                require('src/view/contact.php');
                return $postController->sendContact();

            }elseif ('aboutus' === $route) {
                require('src/view/aboutus.php');
            }elseif ('drama' === $route) {
                // var_dump('drama');
                $postController->showDrama();
            } elseif ('create' === $route ) {
                $postController->ShowCreate();        
            } elseif ('login' === $route ) {
                require('src/view/user/login.php');
                return $userController->loginUser();
            } elseif ('signin' === $route ) {
                require('src/view/user/signin.php');
                return $userController->signUser();
            } elseif ('logout' === $route ) {
                require('src/view/user/logout.php');
            } elseif ('sucess' === $route ) {
                require('src/view/sqlanswer/succes.php');
            } elseif ('account' === $route ) {
                $postController->ShowAcc();        
                return $userController->changePassword();

            }
            
        }
        else {
            require('src/view/home.php');
        }
        // else
        // {
        //     header('Status: 404 Not Found');
        //     echo '<html><body><h1>Page Not Found</h1></body></html>';
        // }
    }
}