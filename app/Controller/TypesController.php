<?php

App::uses('AppController', 'Controller');

class TypesController extends AppController

{

  public function index()

  {

    $this->loadModel('Type');
    $types = $this->Type->find('all');
    $this->set('types', $types);

  }

  public function edit($id)

  {

    $this->Type->id = $id;

    if ($this->Type->exists())

    {

      $this->loadModel('Type');

      if($this->request->is('post'))

      {

        $this->add();
        return $this->redirect(array('controller'=>'types', 'action' => 'index'));

      }

      else

      {

        if ($this->request->is('get'))

        {

          $types = $this->Type->find('all',
          array('id_type' => $id));
          $this->set('types', $types[($id-1)]['Type']);

        }

      }

    }

    else

    {

      $this->Session->setFlash('El Tipo de arte no existe.');
      return $this->redirect(array('controller'=>'types', 'action' => 'index'));

    }

  }

  public function add()

  {

    if (!empty($this->request->data))

    {

      if ($this->Type->save($this->request->data))

      {

        $this->Session->setFlash('Tipo de arte guardado con éxito.');
        return $this->redirect(array('controller'=>'types', 'action' => 'index'));

      }

      else

      {

        $this->Session->setFlash('El Tipo de arte no se pudo ingresar.');
        return $this->redirect(array('controller'=>'types', 'action' => 'index'));

      }

    }

  }

}
