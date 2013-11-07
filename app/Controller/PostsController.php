<?php

App::uses('AppController', 'Controller');

/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

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
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			$this->request->data['Post']['alias'] = $this->Common->vnit_change_title($this->request->data['Post']['title']);
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công 1 bài viết mới', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		}
		$fields = array(
			'Category.id',
			'Category.name',
			'Category.parent_id',
		);
		$conditions['And'] = array('Category.is_active' => 1, 'Category.parent_id' => null);
		$this->Post->Category->unbindModel(array('hasMany' => array('Post')));
		$categories = $this->Post->Category->find('all', array('fields' => $fields, 'conditions' => $conditions));
		$this->set(compact('categories'));
		$this->set('title_for_layout', 'Thêm bài viết');
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if ($this->request->is('post')) {
			$this->Post->id = $id;
			$this->Post->create();
			$this->request->data['Post']['alias'] = $this->Common->vnit_change_title($this->request->data['Post']['title']);
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công 1 bài viết mới', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$fields = array(
			'Category.id',
			'Category.name',
			'Category.parent_id',
		);
		$conditions['And'] = array('Category.is_active' => 1, 'Category.parent_id' => null);
		$this->Post->Category->unbindModel(array('hasMany' => array('Post')));
		$categories = $this->Post->Category->find('all', array('fields' => $fields, 'conditions' => $conditions));
		$this->set(compact('categories'));
		$this->set('title_for_layout', 'Chỉnh sửa bài viết');
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

	public function posts($id) {
		$this->loadModel('Category');
		$category = $this->Category->read('name', $id);
		$this->layout = 'frontend/detailArticle';
		$conditions['AND'] = array('Post.is_active' => 1, 'Post.category_id' => $id);
		$posts = $this->Post->find('all', array('conditions' => $conditions));
		$this->set('posts', $posts);
		$this->set('title_for_layout', $category['Category']['name']);
	}

}
