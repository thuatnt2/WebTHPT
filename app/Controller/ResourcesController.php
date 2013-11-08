<?php

App::uses('AppController', 'Controller');

/**
 * Resources Controller
 *
 * @property Resource $Resource
 * @property PaginatorComponent $Paginator
 */
class ResourcesController extends AppController {

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
		$this->Resource->recursive = 0;
		$this->paginate = array('limit' => $this->limit);
		$this->set('resources', $this->Paginator->paginate());
		$this->set('title_for_layout', 'Tài liệu');
		$this->set('resource_type', $this->Resource->resource_type);
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Resource->exists($id)) {
			throw new NotFoundException(__('Invalid resource'));
		}
		$options = array('conditions' => array('Resource.' . $this->Resource->primaryKey => $id));
		$this->set('resource', $this->Resource->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Resource']['alias'] = $this->Common->vnit_change_title($this->request->data['Resource']['title']);
			$this->request->data['Resource']['view_link'] = str_ireplace('www', 'dl', $this->request->data['Resource']['link']);
			$ext = $this->Resource->getExtFile($this->request->data['Resource']['link']);
			$this->request->data['Resource']['ext'] = $ext;
			if ($ext != 'pdf') {
				$this->request->data['Resource']['view_link'] = $this->request->data['Resource']['view_link'].'?convert_doc_to_pdf=1';
			}
			$user = $this->UserAuth->getUser();
			$this->request->data['Resource']['user_create'] = $user['User']['first_name'];
			$this->Resource->create();
			if ($this->Resource->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công tài liệu', 'flash_succes');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		}
		$this->set('title_for_layout', 'Thêm tài liệu');
		$this->set('resource_type', $this->Resource->resource_type);
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Resource->exists($id)) {
			throw new NotFoundException(__('Invalid resource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Resource->id = $id;
			$this->request->data['Resource']['alias'] = $this->Common->vnit_change_title($this->request->data['Resource']['title']);
			$this->request->data['Resource']['view_link'] = str_ireplace('www', 'dl', $this->request->data['Resource']['link']);
			$ext = $this->Resource->getExtFile($this->request->data['Resource']['link']);
			$this->request->data['Resource']['ext'] = $ext;
			if ($ext != 'pdf') {
				$this->request->data['Resource']['view_link'] = $this->request->data['Resource']['view_link'].'?convert_doc_to_pdf=1';
			}
			$user = $this->UserAuth->getUser();
			$this->request->data['Resource']['user_create'] = $user['User']['first_name'];
			if ($this->Resource->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công tài liệu', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Resource.' . $this->Resource->primaryKey => $id));
			$this->request->data = $this->Resource->find('first', $options);
			$this->set('resource_type', $this->Resource->resource_type);
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
		$this->Resource->id = $id;
		if (!$this->Resource->exists()) {
			throw new NotFoundException(__('Invalid resource'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Resource->delete()) {
			$this->Session->setFlash(__('The resource has been deleted.'));
		} else {
			$this->Session->setFlash(__('The resource could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getResourceType() {
		return $this->Resource->resource_type;
	}

	public function listResources($id) {
		$this->layout = 'frontend/detailArticle';
		$conditions = array('Resource.resource_type' => $id);
		$this->set('resources', $this->Resource->find('all', array('conditions' => $conditions)));
		$resource_type = $this->Resource->resource_type;
		$this->set('title_for_layout', 'Tài liệu - ' . $resource_type[$id]);
	}

	public function view($id) {
		$this->layout = 'frontend/detailArticle';
		$this->set('title_for_layout', 'Xem tài liệu');
		$resource = $this->Resource->read(null, $id);
		$resource_type = $resource['Resource']['resource_type'];
		$conditions['AND'] = array('Resource.resource_type'=>$resource_type,'Resource.id !=' => $id);
		$resources = $this->Resource->find('all', array('conditions'=>$conditions));
		$this->set('resource', $resource);
		$this->set('resources', $resources);
	}

}
