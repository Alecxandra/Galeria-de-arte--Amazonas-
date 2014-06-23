<?php
App::uses('AppController', 'Controller');

class GalleryInformationsController extends AppController {
public function beforeFilter() {
  $this->Auth->allow('contactanos');
}
  
  public function information(){}

public function contactanos(){
  $this->loadModel('GalleryInformation');
  $gallery = $this->GalleryInformation->find('all');
  $this->set('gallery', $gallery);
}
 
  

}
?>