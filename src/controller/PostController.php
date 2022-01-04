<?php

namespace App\controller;

use App\repository\PostRepository;
use App\repository\UserRepository;
use App\repository\ContactRepository;


class PostController
{
    public function __construct()
    {
        $this->postRepository = new PostRepository();
        $this->userRepository = new UserRepository();
        $this->contactRepository = new ContactRepository();

    }
    public function showDrama(){
        // session_start();
        if (isset($_SESSION['mail'])) { 
            $posts = $this->postRepository->getPosts()->fetchAll();
            $user =  $this->userRepository->getUser($_SESSION['mail']);  
            require('src/view/drama.php');          
        }
        else
        {
            // $user =  $this->userRepository->getUser($_SESSION['mail']);  
            $posts = $this->postRepository->getPosts()->fetchAll();
            // var_dump($_SESSION['mail']);
            require('src/view/drama.php');
        }
    }
    public function ShowCreate()
    {
        $user =  $this->userRepository->getUser($_SESSION['mail']);  
        require('src/view/postLayout/dramaCreate.php');
    }

    public function ShowAcc()
    {
        $user =  $this->userRepository->getUser($_SESSION['mail']);  
        $posts = $this->postRepository->getPosts()->fetchAll();
        require('src/view/user/account.php');
    }
    
    public function sendContact(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->contactRepository->sendContact($_POST);
        }
    }
    // CRUD POST
    public function create()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->postRepository->create($_POST);
        }
    }
    
    public function read(int $id)
    {
        $post = $this->postRepository->getPost($id);
        $author =  $postRepository->getAuthor($post->getAuthorId());
        require('src/view/postLayout/dramaRead.php');
    }

    public function update(int $id){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->postRepository->update($_POST);
        }
        $post = $this->postRepository->getPost($id);
        require('src/view/postLayout/dramaUpdate.php');
    }

    public function delete(int $id){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->postRepository->delete($_POST);
        }
        $post = $this->postRepository->getPost($id);
        require('src/view/postLayout/dramaDelete.php');
    }
}