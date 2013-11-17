<?php

App::uses('AppController', 'Controller');

class IndexController extends AppController {

    public $layout = 'frontend/index';
    public $components = array('Paginator');
    public $uses = array('Usermgmt.User', 'Articlesss');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->set('current_menu_id', 0);
        $title_for_layout = "Trang chủ";
        get_class($this->User);
        $this->loadModel('Post');
        $this->Post->recursive = 0;
        $actionEvents = $this->Post->find('all', array('conditions' => array('Post.category_id' => 2)));
        $generalNews = $this->Post->find('all', array('conditions' => array('Post.category_id' => 3)));
        $groupNews = $this->Post->find('all', array('conditions' => array('Post.category_id' => 5)));
        $typicalFaces = $this->Post->find('all', array('conditions' => array('Post.category_id' => 6)));
        $confidentials = $this->Post->find('all', array('conditions' => array('Post.category_id' => 7)));
        # For teacher blogs table
        $teachers = $this->User->find('all', array('conditions' => array('User.user_group_id' => 2)));
        $this->set(compact('teachers', 'actionEvents', 'generalNews', 'groupNews', 'typicalFaces', 'confidentials', 'title_for_layout'));
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
        $article =  $this->Post->find('first', $options);
         $current_menu_id = $article['Post']['category_id'];
        $conditions['AND'] = array('Post.is_active' => 1, 'Post.category_id' => $article['Post']['category_id']);
        $options = array('conditions' => $conditions,'order' =>array('Post.modified' => 'DESC'),'limit' => 7);
        $otherArticle = $this->Post->find('all', $options);
        $this->set(compact('article','otherArticle','current_menu_id'));
    }

}

?>
