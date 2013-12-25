<?php

App::uses('AppController', 'Controller');

/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class ConfidentialsController extends AppController {
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Post->recursive = 0;

		$this->set('posts', $this->Paginator->paginate());
		$this->set('title_for_layout', 'Danh sách bài viết');
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Confidential.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash('Xóa thành công', 'flash_success');
		} else {
			$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function index() {
		if ($this->request->isAjax) {
			$this->layout = null;
		} else {
			$this->layout = 'frontend/detailArticle';
		}
		$conditions['AND'] = array('Confidential.is_active' => 1);
		$this->paginate = array(
			'limit' => 5,
			'conditions' => $conditions,
			'order' => array(
				'Confidential.modified' => 'DESC'
			),
		);
		$confidentials = $this->paginate();
		$this->set('confidentials', $confidentials);
	}

	/*
	 * Add confidential 
	 */

	public function add() {
		$this->layout = false;
		$this->autoRender = false;
		$result = array();
		$result['status'] = 0;
		$result['message'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
		$this->request->data['Confidential']['is_active'] = false;
		$this->Confidential->set($this->request->data);
		if ($this->Confidential->validates()) {
			$this->Confidential->create();
			if ($this->Confidential->save($this->request->data)) {
				$result['status'] = 1;
				$result['message'] = 'Bài đăng của bạn đã được gửi đi, đang chờ Admin kiểm duyệt';
			}
		} else {
			$errors = $this->Confidential->validationErrors;
			foreach ($errors as $k => $v) {
				$result['message'] = $v[0];
				break;
			}
		}
		return json_encode($result);
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
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Confidential.' . $this->Post->primaryKey => $id));
		$article = $this->Post->find('first', $options);
		$this->loadModel('Category');
		$this->Category->recursive = 1;
		$this->Category->unbindModel(array('hasMany' => array('Post')));
		$category = $this->Category->read(null, $article['Post']['category_id']);
		$current_menu_id = $article['Post']['category_id'];
		$conditions['AND'] = array('Confidential.is_active' => 1, 'Confidential.category_id' => $article['Post']['category_id'], 'Confidential.' . $this->Post->primaryKey . ' !=' => $id);
		$otherArticle = $this->Post->find('all', array('conditions' => $conditions, 'limit' => 5));
		$title_for_layout = $article['Post']['title'];
		$this->set(compact('article', 'otherArticle', 'current_menu_id', 'category', 'title_for_layout'));
	}

	/**
	 * Get the most Recent post
	 *
	 * @param int $limit The number of comments you want
	 * @return Array
	 * */
	public function recent($limit = 7) {
		if (!empty($this->request->params['requested'])) {
			$this->recursive = 1;
			$posts = array();
			$recent = $this->Post->find('all', array('limit' => $limit, 'order' => 'Confidential.modified DESC'));
			array_push($posts, $recent);
			$viewMost = $this->Post->find('all', array('limit' => $limit, 'order' => 'Confidential.view_count DESC'));
//			$this->log($viewMost, 'debug');
			array_push($posts, $viewMost);
			return $recent;
		}
	}

}
