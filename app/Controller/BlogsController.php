<?php

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

    var $layout = 'frontend/blog';
    var $uses = array('Article', 'Usermgmt.User');

    public function index($id) {
        $title_for_layout = "Blog giáo viên";
        $options = array(
            'conditions' => array(
                'User.user_group_id' => 2,
                'User.id' => $id
            )
        );
        $result = $this->User->find('first', $options);
        $user = $result['User'];
        $articles = $result['Article'];
        $this->set(compact('title_for_layout', 'user','articles'));
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
