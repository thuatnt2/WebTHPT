<?php

App::uses('AppController', 'Controller');

/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';

	public function admin_index() {
		$this->Category->recursive = 0;
		$categories = $this->Category->find('all');
		$this->set('categories', $categories);
		$this->set('title_for_layout', 'Danh mục');
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['alias'] = $this->Common->vnit_change_title($this->request->data['Category']['name']);
			//debug($this->request->data); exit();
			$category = $this->Category->save($this->request->data);
			if ($category) {
				$this->loadModel('UserCategory');
				$data = array();
				foreach ($this->request->data['User'] as $k) {
					$data['UserCategory']['user_id'] = $k;
					$data['UserCategory']['category_id'] = $category['Category']['id'];
					$this->UserCategory->create();
					$this->UserCategory->save($data);
				}
				$this->Session->setFlash('Lưu thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$conditions['AND'] = array('parent_id' => null, 'id !=' => 1);
		$parentCategories = $this->Category->ParentCategory->find('list', array('conditions' => $conditions));
		$this->loadModel('Usermgmt.User');
		$this->User->unbindModel(array('hasMany' => array('Article', 'LoginToken')));
		$users = $this->User->find('all', array('fields' => array('User.id', 'User.username', 'User.first_name')));
		$this->set(compact('parentCategories', 'users'));
		$this->set('title_for_layout', 'Thêm danh mục');
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//var_dump($this->request->data);exit();
			$this->Category->id = $id;
			$category = $this->Category->save($this->request->data);
			if ($category) {
				if (!empty($this->request->data['User'])) {
					$this->loadModel('UserCategory');
					$this->UserCategory->deleteAll(array('UserCategory.category_id' => $id));
					$data = array();
					foreach ($this->request->data['User'] as $k) {
						$data['UserCategory']['user_id'] = $k;
						$data['UserCategory']['category_id'] = $id;
						$this->UserCategory->create();
						$this->UserCategory->save($data);
					}
				}
				$this->Session->setFlash('Lưu thành công danh mục "' . $category['Category']['name'] . '"', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
			$conditions['AND'] = array('parent_id' => null, 'id !=' => 1);
			$parentCategories = $this->Category->ParentCategory->find('list', array('conditions' => $conditions));
			$this->loadModel('Usermgmt.User');
			$this->User->unbindModel(array('hasMany' => array('Article', 'LoginToken')));
			$users = $this->User->find('all', array('fields' => array('User.id', 'User.username', 'User.first_name')));
			$this->loadModel('UserCategory');
			$usersAllow = array();
			$dataAllow = $this->UserCategory->find('all', array('fields' => 'UserCategory.user_id', 'conditions' => array('UserCategory.category_id' => $id)));
			foreach ($dataAllow as $k) {
				array_push($usersAllow, $k['UserCategory']['user_id']);
			}
			$this->set(compact('parentCategories', 'users'));
			$this->set('title_for_layout', 'Sửa danh mục');
			$this->set('usersAllow', $usersAllow);
		}
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->onlyAllow('post', 'delete');
		$this->loadModel('Post');
		$post = $this->Post->find('count', array('conditions' => array('Post.category_id' => $id)));
		if (!empty($post)) {
			$this->Session->setFlash('Danh mục này đã có bài viết, không thể xóa', 'flash_error');
			return $this->redirect(array('action' => 'index'));
		}
		if ($this->Category->delete()) {
			$this->loadModel('UserCategory');
			$this->UserCategory->deleteAll(array('UserCategory.category_id' => $id));
			$this->Session->setFlash('Xóa thành công', 'flash_success');
		} else {
			$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function makeActive($id, $status) {
		$this->Category->id = $id;
		$this->Category->saveField('is_active', $status);
		$this->redirect('/admin/danh-muc');
	}

	public function getMainMenu() {
		$conditions['AND'] = array('Category.id !=' => 1, 'Category.is_active' => 1);
		$menus = $this->Category->find('all', array('conditions' => $conditions));
		return $menus;
	}

	public function firstMenuItem() {

		$this->Category->unbindModel(array('hasMany' => array('Post', 'ChildCategory')));
		$menu = $this->Category->read('name', 1);
		$this->loadModel('Post');
		$posts = $this->Post->find('all', array('fields' => array('Post.id', 'Post.title', 'Post.alias'), 'conditions' => array('Post.category_id' => 1)));
		$menu['posts'] = $posts;
		return $menu;
	}

	// Xem các bài viết trong danh mục
	public function view($category_id) {
		$this->loadModel('Post');
	}

}
