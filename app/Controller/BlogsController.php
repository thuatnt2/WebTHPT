<?php

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

    var $layout = 'frontend/blog';
    var $uses = array('Article', 'User');

    public function index() {
        $title_for_layout = "Blog giáo viên";
        $options = array(
            'conditions' => array(
                'User.user_group_id' => 2
            ),
            'recursive' => -1
        );
        $users = $this->User->find('all', $options);
        $this->log($users, 'debug');
        $this->set(compact('title_for_layout', 'users'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('The article has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'));
            }
        }
    }

    //Get articles with user_ud = $id
    public function view($id) {
        $options = array(
            'conditions' => array('Article.user_id' => $id)
        );
        $articles = $this->Article->find('all', $options);
        $this->set(compact('articles'));
    }

}

?>
