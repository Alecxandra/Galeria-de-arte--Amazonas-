<?php
App::uses('AppController', 'Controller');

class GalleryInformationsController extends AppController {
public function information(){}

public function contactanos(){
  $this->loadModel('GalleryInformation');
  $gallery = $this->GalleryInformation->find('all');
  $this->set('gallery', $gallery);
}

}
?>