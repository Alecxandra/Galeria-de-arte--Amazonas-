<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {
  public function beforeFilter() {
    $this->Auth->allow('index', 'contact');
  }  
  
  public function index() {
      
    }
  
    public function contact() {
      
    }
}