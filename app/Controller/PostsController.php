<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'RequestHandler');

    
    public function index($id_categorie=null) {   
        $this->loadModel("Categorie");
        
        $categories=$this->Categorie->find('all');
        $this->set('categories', $categories); 
        
        if($id_categorie){                  
            //$this->set('posts', $this->Post->find('all',array('conditions'=>array('Post.id_categ'=>$id_categorie))));
            $info=array('current_categorie_id'=>$id_categorie,'current_categorie'=>$this->Categorie->findById($id_categorie));
        }else{
            $info=array(); //'current_categorie_id'=>1,'current_categorie'=>'Java-Core');
        }
        $this->set('display', 1); //categories!
        $this->set('info',$info);
    }
    
    public function view($id_post=null) {
        if (!$id_post) {
            throw new NotFoundException(__('Article introuvable!'));
        }

        $post = $this->Post->findById($id_post);
        if (!$post) {
            throw new NotFoundException(__('Article introuvable!'));
        }
        
        $this->loadModel("Categorie");
        $this->loadModel("SCategorie");

        $current_categorie=$this->Categorie->findById($post['Post']['id_categ']);       
        $current_scategorie =$this->SCategorie->findById($post['Post']['id_scateg']);
                 
        $info=array(
            'current_categorie_id'=>$current_categorie['Categorie']['id'],
            'current_categorie'=>$current_categorie['Categorie']['libelle'],
            'current_scategorie'=>$current_scategorie['SCategorie']['libelle']
        );
        $this->set('info',$info);
        
        $this->set('categories', $this->Categorie->find('all'));
        $this->set('post', $post);
        $this->render();
    }
    public function display($id_scategorie=1) {
        $this->loadModel("Categorie");
        $this->loadModel("SCategorie");
         
        $categories=$this->Categorie->find('all');
        $this->set('categories', $categories);
        
        $this->set('posts', $this->Post->find('all',array('conditions'=>array('Post.id_scateg'=>$id_scategorie))));
        
        
        $current_scategorie=$this->SCategorie->findById($id_scategorie);
        $current_categorie_id=$current_scategorie['SCategorie']['id_categ'];
        $current_categorie=$this->Categorie->findById($current_categorie_id);
                 
        $info=array(
            'current_categorie_id'=>$current_categorie_id,
            'current_categorie'=>$current_categorie['Categorie']['libelle'],
            'current_scategorie'=>$current_scategorie['SCategorie']['libelle']//,
            //'current_photo'=>$current_categorie['Categorie']['photo']
        );
        $this->set('info',$info);
        
        $this->set('display', 2); //posts!
        $this->render('index');
    }
    public function display2($id_categorie=1) {
        $this->loadModel("Categorie");
        $this->loadModel("SCategorie");
         
        $categories=$this->Categorie->find('all');
        $this->set('categories', $categories);
        
        $scategories = $this->SCategorie->find('all',array('conditions'=>array('SCategorie.id_categ'=>$id_categorie)));
        $this->set('scategories', $scategories); 
        
        //$this->set('posts', $this->Post->find('all',array('conditions'=>array('Post.id_scateg'=>$id_scategorie))));
                
        //$current_scategorie=$this->SCategorie->findById($id_scategorie);
        //$current_categorie_id=$current_scategorie['SCategorie']['id_categ'];
        $current_categorie=$this->Categorie->findById($id_categorie);
            
        if(isset($current_categorie['Categorie'])){
            $info=array(
                'current_categorie_id'=>$id_categorie,
                'current_categorie'=>$current_categorie['Categorie']['libelle'],
                'current_photo'=>$current_categorie['Categorie']['photo']
                //'current_scategorie'=>$current_scategorie['SCategorie']['libelle']
            );
            $this->set('info',$info);
        }
        
        $this->set('display', 3); //Sous-Categories!
        $this->render('index');
    }
    
    public function async($id_categorie) {
        $this->loadModel("SCategorie");
        
        $scategories = $this->SCategorie->find('all',array('conditions'=>array('SCategorie.id_categ'=>$id_categorie)));
        $this->set('scategories', $scategories); //json_encode(
        
        $this->set('posts', $this->Post->find('all',array('conditions'=>array('Post.id_categ'=>$id_categorie))));
                
        $this->loadModel("Categorie");
        $current=$this->Categorie->findById($id_categorie);
        
        $info=array('current_categorie_id'=>$id_categorie,'current_categorie'=>$current['Categorie']['libelle']);
        $this->set('info',$info);
                
        $this->set('display', 1); //categories!
        $this->render();
    }
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Article introuvable!'));
        }

        $post = $this->Post->findById($id);

        if (!$post) {
            throw new NotFoundException(__('Article introuvable!'));
        }

        $this->loadModel("Categorie");
        $this->loadModel("SCategorie");
         
        $categories=$this->Categorie->find('all');
        $this->set('categories', $categories);
        $scategories = $this->SCategorie->find('all');
        $this->set('scategories', $scategories); 
        
        $current_categorie=$this->Categorie->findById($post['Post']['id_categ']);
        $current_scategorie=$this->SCategorie->findById($post['Post']['id_scateg']);
        
        $info=array(
            'current_categorie_id'=>$post['Post']['id_categ'],
            'current_categorie'=>$current_categorie['Categorie']['libelle'],
            'current_scategorie'=>$current_scategorie['SCategorie']['libelle']
        );
        $this->set('info',$info);
        $this->set('post',$post);
        
        /*
        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }*/
    }
    

    
    /*
    public function async($id) {
        $posts = $this->Post->find('all',array('conditions'=>array('Post.id_categ'=>$id)));
        $this->set('posts', $posts); //json_encode(
        
        $this->render();
    }
    public function viewAsync($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        
        $this->loadModel("Categorie");
        $this->set('categories', $this->Categorie->find('all'));
        $this->set('post', $post);
        
        $this->render('view');
    }
    public function index() {       
        $this->loadModel("Categorie");
        $this->set('categories', $this->Categorie->find('all'));
        
        //$this->set('posts', $this->Post->find('all'));
    }
     * */

    
    
    
    /*
    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
    */
    
}
