<?php

App::uses('AppController', 'Controller');

class TechniquesController extends AppController

{

  public function index()

  {

    $this->loadModel('Technique');
    $techniques = $this->Technique->find('all');
    $this->set('techniques', $techniques);

  }

  public function edit($id)

  {

    $this->Technique->id = $id;

    if ($this->Technique->exists())

    {

      $this->loadModel('Technique');

      if($this->request->is('post'))

      {

        $this->add();
        return $this->redirect(array('controller'=>'techniques', 'action' => 'index'));

      }

      else

      {

        if ($this->request->is('get'))

        {

          $techniques = $this->Technique->find('all',
          array('id_technique' => $id));
          $this->set('techniques', $techniques[($id-1)]['Technique']);

        }

      }

    }

    else

    {

      $this->Session->setFlash('La Técnica no existe.');
      return $this->redirect(array('controller'=>'techniques', 'action' => 'index'));

    }

  }

  public function add()

  {

    if (!empty($this->request->data))

    {

      if ($this->Technique->save($this->request->data))

      {

        $this->Session->setFlash('Técnica guardada con éxito.');
        return $this->redirect(array('controller'=>'techniques', 'action' => 'index'));

      }

      else

      {

        $this->Session->setFlash('La Técnica no se pudo ingresar.');
        return $this->redirect(array('controller'=>'techniques', 'action' => 'index'));

      }

    }

  }

}
