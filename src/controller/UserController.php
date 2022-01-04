<?php

namespace App\controller;
use App\repository\UserRepository;

class UserController
{
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function signUser(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->signUser($_POST);
        }
    }

    public function loginUser(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->loginUser($_POST);
        }
    }
    public function changePassword(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->changePassword($_POST);
        }
    }
}