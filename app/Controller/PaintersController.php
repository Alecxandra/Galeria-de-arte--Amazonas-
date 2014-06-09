<?php
App::uses('AppController', 'Controller');

class PaintersController extends AppController {
  public function artists(){
    $this->loadModel('Painter');
    $painters = $this->Painter->find('all');
    $this->set('painters', $painters);
  }
  
  public function painter(){
     $this->loadModel('Painter');
     
    if ($this->request->is('get')) {
       $this->request->named['id'];
        $painters=$this->Painter->find('all',array('conditions' => array('id_painter' =>$this->request->named['id'])));
     $this->set('painters', $painters);
    }
  }

}
?>