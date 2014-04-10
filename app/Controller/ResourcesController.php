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

	public function beforeFilter() {
		parent::beforeFilter();
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Resource->recursive = 0;
		$this->set('resources', $this->Resource->find('all'));
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
		//$this->set('resource_type',$this->Resource->resource_type);
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
				$this->request->data['Resource']['view_link'] = $this->request->data['Resource']['view_link'] . '?convert_doc_to_pdf=1';
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
				$this->request->data['Resource']['view_link'] = $this->request->data['Resource']['view_link'] . '?convert_doc_to_pdf=1';
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
		if ($this->request->isAjax) {
			$this->layout = null;
		} else {
			$this->layout = 'frontend/detailArticle';
		}
		$conditions = array('Resource.resource_type' => $id);
		$this->paginate = array(
			'conditions' => $conditions,
			'limit' => $this->limit,
			'order' => 'Resource.created DESC',
		);
		$resources = $this->Paginator->paginate();
		$this->set('resources', $resources);
		$resource_type = $this->Resource->resource_type;
		if (isset($resource_type['TNDT'][$id])) {
			$resource_title = 'Tài nguyên điện tử';
			$resource_item = $resource_type['TNDT'][$id];
		} else {
			$resource_title = 'Kết quả học tập';
			$resource_item = $resource_type['KQHT'][$id];
		}
		$this->set('resource_title', $resource_title);
		$this->set('resource_item', $resource_item);
		if (!empty($resources)) {
			$this->set('title_for_layout', 'Tài liệu');
		} else {
			$this->set('title_for_layout', 'Không có tài liệu nào');
			$this->set('resource_type', $id);
		}


		// Xac dinh menu hien hanh la Tai Nguyen Dien tu. Vi Resource ko phai la category.
		// Bad code !
		$current_menu_is_resource = true;
		$this->set('current_menu_is_resource', $current_menu_is_resource);
	}

	public function view($id) {
		$this->layout = 'frontend/detailArticle';
		$this->set('title_for_layout', 'Xem tài liệu');
		$resource = $this->Resource->read(null, $id);
		$resource_type_id = $resource['Resource']['resource_type'];
		$conditions['AND'] = array('Resource.resource_type' => $resource_type_id, 'Resource.id !=' => $id);
		$resources = $this->Resource->find('all', array('conditions' => $conditions));
		$this->set('resource', $resource);
		$this->set('resources', $resources);
		$resource_type = $this->Resource->resource_type;
		if (isset($resource_type['TNDT'][$id])) {
			$resource_title = 'Tài nguyên điện tử';
			$resource_item = $resource_type['TNDT'][$id];
		} else {
			$resource_title = 'Kết quả học tập';
			$resource_item = $resource_type['KQHT'][$id];
		}
		$this->set('resource_title', $resource_title);
		$this->set('resource_item', $resource_item);
		//$this->set('resource_type', $this->Resource->resource_type[$resource_type]);
	}

}
