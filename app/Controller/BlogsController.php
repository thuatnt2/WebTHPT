<?php

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

    var $layout = 'frontend/blog';
    var $uses = array('Article', 'Usermgmt.User');

    public function beforeFilter() {
        parent::beforeFilter();
        //Find blog owner
        $user = $this->User->read(null, $this->request->params['bloger_id']);
        $this->set('user', $user['User']);

        $options = array(
            'conditions' => array('Article.user_id' => $user['User']['id']),
            'fields' => array('created_at'),
            'recursive' => -1);
        $articles = $this->Article->find('all', $options);
        $dates_have_post = array();
        foreach ($articles as $article) {
            $date = new DateTime($article['Article']['created_at']);
            array_push($dates_have_post, $date->format('Y-m-d'));
        }
        $dates_have_post = array_unique($dates_have_post);
        $this->log($dates_have_post, 'debug');
        $this->set('dates_have_post',$dates_have_post);
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
        $articles = $result['Article'];
        $this->set(compact('title_for_layout', 'articles'));
    }

    public function viewArticle($article_id) {

        $article = $this->Article->read(null, $this->request->params['article_id']);
        $this->set(compact('article'));
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
