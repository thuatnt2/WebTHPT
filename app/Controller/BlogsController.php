<?php

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

    var $layout = 'frontend/blog';
    var $uses = array('Article', 'Usermgmt.User');

    public function index($bloger_id) {
        $user = $this->User->read(null, $this->request->params['bloger_id']);
        $this->set('user', $user['User']);
        $title_for_layout = "Blog giáo viên";

        $options = array(
            'conditions' => array('Article.user_id' => $bloger_id),
            'recursive' => -1
        );
        $articles = $this->Article->find('all', $options);
        $dates_have_post = array();
        foreach ($articles as $article) {
            $date = new DateTime($article['Article']['created_at']);
            array_push($dates_have_post, $date->format('Y-m-d'));
        }
        $dates_have_post = array_unique($dates_have_post);
        $this->set(compact('title_for_layout', 'articles', 'dates_have_post'));
    }

    public function viewArticle($article_id) {
        $user = $this->User->read(null, $this->request->params['bloger_id']);
        $this->set('user', $user['User']);
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

    /**
     * GET: /blog/filter_article_by_date
     * query: bloger_id, date
     */
    public function filterArticleByDate() {
        $this->autoRender = false;
        $this->response->type('json');

        $user_id = $this->request->query['bloger_id'];
        $date = $this->request->query['date'];

        $user = $this->User->read(null, $user_id);
        $this->set('user', $user['User']);

        $resp = array();

        // This's a simple trick :)
        $from_date = $date . ' 00:00:00';
        $to_date = $date . ' 23:59:59';

        $this->log($from_date . ' -> ' . $to_date, 'debug');
        $options = array(
            'conditions' => array(
                'Article.user_id' => $user_id,
                'Article.created_at BETWEEN ' . "'$from_date'" . ' AND ' . "'$to_date'",
            ),
            'recursive' => -1
        );
        
        $articles = $this->Article->find('all', $options);
        $this->set(compact('articles'));
        // Get result list in html
        $view = new View($this, false);
        $html = $view->render('/Articles/articles_listing');
        $resp['html'] = $html;
        $this->response->body(json_encode($resp));
    }

}

?>
