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
        $this->loadModel('Post');
        $this->Post->recursive = 0;
        $action_events = $this->Post->find('all',array('conditions' => array('Post.category_id' => 2)));
//        $this->log($action_events,'debug');
        $this->set(compact('action_events'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->loadModel('Post');
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('article', $this->Post->find('first', $options));
    }

}

?>
