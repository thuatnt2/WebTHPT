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
		$title_for_layout = "Trang chủ";
		get_class($this->User);
		$this->loadModel('Post');
		$this->Post->recursive = 0;
		$actionEvents = $this->Post->find('all', array('conditions' => array('Post.category_id' => 2)));
		$generalNews = $this->Post->find('all', array('conditions' => array('Post.category_id' => 12)));
		$groupNews = $this->Post->find('all', array('conditions' => array('Post.category_id' => 5)));
		$typicalFaces = $this->Post->find('all', array('conditions' => array('Post.category_id' => 6)));
		$confidentials = $this->Post->find('all', array('conditions' => array('Post.category_id' => 7)));
		# For teacher blogs table
		$teachers = $this->User->find('all', array('conditions' => array('User.user_group_id' => 2)));
		$this->set(compact('teachers', 'actionEvents', 'generalNews', 'groupNews', 'typicalFaces', 'confidentials', 'title_for_layout'));
	}

}

?>
