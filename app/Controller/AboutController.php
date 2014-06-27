<?php
App::uses('AppController', 'Controller');
class  AboutController extends AppController {
  public function beforeFilter() {
  $this->Auth->allow('about');
}
  public function about(){
    
 }
}