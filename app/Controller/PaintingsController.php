<?php

App::uses('AppController', 'Controller');

class PaintingsController extends AppController

{

  public function gallery()

  {
    $this->loadModel('Painting');
    $paintings = $this->Painting->find('all');
    $this->set('paintings', $paintings);
  }

  public function carousel ()

  {

    $this->loadModel('Painting');
    $paintings = $this->Painting->find('all');
    $this->set('paintings', $paintings);

    if ($this->request->is('get'))

    {

      $this->request->named['id'];

    }

  }

  public function edit($id)

  {

    $this->Painting->id = $id;

    if (!$this->Painting->exists())

    {

      $this->Session->setFlash('La Pintura no existe.');
      return $this->redirect(array('controller'=>'paintings', 'action' => 'index'));

    }

    else

    {

      if ($this->request->is('get'))

      {

        $this->loadModel('Technique');//Tecnica

        $this->Technique->unbindModel(array('hasMany' => array('Painting')));
        $techniques = $this->Technique->find('all');

        foreach ($techniques as $technique)

        {

          $techniques_select[$technique['Technique']['id_technique']] = $technique['Technique']['technique_name'];

        }

        $this->set('techniques', $techniques_select);

        $this->loadModel('Type');//Tipo

        $this->Type->unbindModel(array('hasMany' => array('Painting')));
        $types = $this->Type->find('all');

        foreach ($types as $type)

        {

          $types_select[$type['Type']['id_type']] = $type['Type']['type_name'];

        }

        $this->set('types', $types_select);

        $this->loadModel('Painter');//Pintores

        $this->Painter->unbindModel(array('hasMany' => array('Painting')));
        $painters = $this->Painter->find('all');

        foreach ($painters as $painter)

        {

          $painters_select[$painter['Painter']['id_painter']] = $painter['Painter']['painter_name'];

        }

        $this->set('painters', $painters_select);

        $this->loadModel('Painting');//Pinturas

        $paintings = $this->Painting->find('all', array('id_painting' => $id));
        $this->set('paintings', $paintings[($id-1)]['Painting']);

      }

      else

      {

        if($this->request->is('post'))

        {

          if(empty($this->request->data['Painting']['painting_picture']['name']))

          {

            $this->loadModel('Painting');//Pinturas

            $paintings = $this->Painting->find('all', array('id_painting' => $id));
            $paintings = $paintings[($id-1)]['Painting'];

            $painting = $this->request->data;
            $painting['Painting']['painting_picture'] = $paintings['painting_picture'];

          }

          else

          {

            $target_path = "img/". $this->request->data['Painting']['painting_picture']['name'];
            move_uploaded_file($this->request->data['Painting']['painting_picture']['tmp_name'], $target_path);
            $painting = $this->request->data;

            $painting['Painting']['painting_picture'] = $this->request->data['Painting']['painting_picture']['name'];

          }

          if ($this->Painting->save($painting))

          {

            $this->Session->setFlash('Pintura agregada.');
            return $this->redirect(array('controller'=>'paintings', 'action' => 'index'));

          }

          else

          {

            $this->Session->setFlash('Ha ocurrido un error. Intente de nuevo.');
            return $this->redirect(array('controller'=>'paintings', 'action' => 'index'));

          }

        }

      }

    }

  }

  public function add()

  {

    $this->loadModel('Technique');
    $this->Technique->unbindModel(array('hasMany' => array('Painting')));
    $techniques = $this->Technique->find('all');
    $techniques_select = array();
    foreach ($techniques as $technique)

    {

      $techniques_select[$technique['Technique']['id_technique']] = $technique['Technique']['technique_name'];

    }

    $this->set('techniques', $techniques_select);
    $this->loadModel('Type');
    $this->Type->unbindModel(array('hasMany' => array('Painting')));
    $types = $this->Type->find('all');
    $types_select = array();

    foreach ($types as $type)

    {

      $types_select[$type['Type']['id_type']] = $type['Type']['type_name'];

    }

    $this->set('types', $types_select);

    $this->loadModel('Painter');
    $this->Painter->unbindModel(array('hasMany' => array('Painting')));
    $painters = $this->Painter->find('all');
    $painters_select = array();

    foreach ($painters as $painter)

    {

      $painters_select[$painter['Painter']['id_painter']] = $painter['Painter']['painter_name'];

    }

    $this->set('painters', $painters_select);

    if (!empty($this->request->data))

    {

      $target_path = "img/". $this->request->data['Painting']['painting_picture']['name'];
      move_uploaded_file($this->request->data['Painting']['painting_picture']['tmp_name'], $target_path);
      $painting = $this->request->data;
      $painting['Painting']['painting_picture'] = $this->request->data['Painting']['painting_picture']['name'];

      if ($this->Painting->save($painting))

      {

        $this->Session->setFlash('Pintura agregada.');
        return $this->redirect(array('controller'=>'paintings', 'action' => 'index'));

      }

      else

      {

        $this->Session->setFlash('Ha ocurrido un error. Intente de nuevo.');
        return $this->redirect(array('controller'=>'paintings', 'action' => 'index'));

      }

    }

  }

  public function index()

  {

    $paintings = $this->Painting->find('all');
    $this->set('paintings', $paintings);

  }

}
