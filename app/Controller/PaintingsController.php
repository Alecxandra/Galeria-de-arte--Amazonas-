<?php

App::uses('AppController', 'Controller');

class PaintingsController extends AppController {    
  public function gallery() {
    $this->loadModel('Painting');
    $paintings = $this->Painting->find('all');
    $this->set('paintings', $paintings);
  }
  
  public function carousel () {
    $this->loadModel('Painting');
     $paintings = $this->Painting->find('all');
     $this->set('paintings', $paintings);
    if ($this->request->is('get')) {
       $this->request->named['id'];      
    }
    
  }
}