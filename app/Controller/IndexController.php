<?php

App::uses('AppController', 'Controller');

class IndexController extends AppController {

    public $layout = 'frontend/index';
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $title_for_layout = "Trang chủ";
        $this->loadModel('Post');
        $this->Post->recursive = 0;
        $actionEvents = $this->Post->find('all', array('conditions' => array('Post.category_id' => 2)));
        $generalNews = $this->Post->find('all', array('conditions' => array('Post.category_id' => 3)));
        $groupNews = $this->Post->find('all', array('conditions' => array('Post.category_id' => 5)));
        $typicalFaces = $this->Post->find('all', array('conditions' => array('Post.category_id' => 6)));
        $confidentials = $this->Post->find('all', array('conditions' => array('Post.category_id' => 7)));
        $this->set(compact('actionEvents','generalNews','groupNews','typicalFaces','confidentials','title_for_layout'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->layout = 'frontend/detailArticle';
        $this->loadModel('Post');
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('article', $this->Post->find('first', $options));
    }

}

?>
