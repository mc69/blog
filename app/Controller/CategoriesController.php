<?php

App::uses('AppController', 'Controller');
class CategoriesController extends AppController {
       
    public function index() {
        $this->loadModel("Categorie");
        $categories= $this->Categorie->find('all');
        $this->set('categories',$categories);
    }

}
