<?php
require_once 'AppController.php';
class DefaultController extends AppController{
    public function login(){
        $this->render('login'); 
    }
    
    public function register(){
        $this->render('register');
    }
    public function activities(){
        $this->render('activities');
    }
    
    public function buypass(){
        $this->render('buypass');
    }
    
    public function graphic(){
        $this->render('graphic');
    }
    
    public function pricing(){
        $this->render('pricing');
    }
}