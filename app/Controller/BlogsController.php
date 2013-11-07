<?php

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

    var $layout = 'frontend/blog';
    var $uses = array('Article', 'Usermgmt.User');

    public function beforeFilter() {
        parent::beforeFilter();
        //Find blog owner
        $user = $this->User->find('first', array(
            'conditions' => array('User.id' => $this->request->params['bloger_id']),
            'recursive' => -1
                )
        );
        $this->set('user', $user['User']);
    }

    public function index($bloger_id) {
        $title_for_layout = "Blog giáo viên";
        $options = array(
            'conditions' => array(
                'User.user_group_id' => 2,
                'User.id' => $bloger_id
            )
        );
        $result = $this->User->find('first', $options);
        $user = $result['User'];
        $articles = $result['Article'];
        $this->set(compact('title_for_layout', 'articles'));
    }

    public function viewArticle($article_id) {

        $article = $this->Article->read(null, $this->request->params['article_id']);
        $this->set(compact('article'));
        $this->log($article, 'debug');
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
