<?php
App::uses('AppController', 'Controller');

class PaintersController extends AppController

{

  var $id_actual;

  public function artists()

  {

    $this->loadModel('Painter');
    $painters = $this->Painter->find('all');
    $this->set('painters', $painters);

  }

  public function painter()

  {

    $this->loadModel('Painter');

    if ($this->request->is('get'))

    {

      $this->request->named['id'];
      $painters=$this->Painter->find('all',
      array('conditions' => array('id_painter' =>$this->request->named['id'])));
      $this->set('painters', $painters);

    }

  }

  public function paintings_painter()

  {

    $this->loadModel('Painter');

    if ($this->request->is('get'))

    {

      $this->request->named['id'];
      $painters=$this->Painter->find('all',
                                      array(
                                        'conditions' => array('id_painter' =>$this->request->named['id_painter']),
                                        'contain' => array('Painting' => array('Technique')),
                                      ));

     $this->set('painters', $painters);

    }

  }

  public function index()

  {
    $this->loadModel('Painter');
    $painters = $this->Painter->find('all');
    $this->set('painters', $painters);

  }

  public function edit($id)

  {

    $this->loadModel('Painter');

    if($this->request->is('post'))

    {

      $this->Painter->id = $id;

      if (!$this->Painter->exists())

      {

          throw new NotFoundException(__('El Usuario no Existe'));

      }

      else

      {

        $this->add();
        return $this->redirect(array('controller'=>'painters', 'action' => 'index'));

      }

    }

    else

    {

      if ($this->request->is('get'))

      {

        $painters=$this->Painter->find('all',
        array('id_painter' => $id));
        $this->set('painters', $painters[($id-1)]['Painter']);

      }

    }

  }

  public function add()

  {

    if (!empty($this->request->data))

    {

      if ($this->Painter->save($this->request->data))

      {

        $this->Session->setFlash('Pintor guardado con éxito.');

      }

      else

      {

        $this->Session->setFlash('El pintor no se pudo ingresar.');

      }

    }

  }

}
?>
