<?php

App::uses('AppController', 'Controller');

/**
 * Resources Controller
 *
 * @property Resource $Resource
 * @property PaginatorComponent $Paginator
 */
class SchedulesController extends AppController {
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
		$this->Schedule->recursive = 0;
		$this->paginate = array('limit' => $this->limit, 'fields' => null);
		$this->set('resources', $this->Paginator->paginate());
		$this->set('title_for_layout', 'Tài liệu');
		$this->set('resource_type', $this->Schedule->resource_type);
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid resource'));
		}
		$options = array('conditions' => array('Resource.' . $this->Schedule->primaryKey => $id));
		$this->set('resource', $this->Schedule->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$user = $this->UserAuth->getUser();
			$this->request->data['Schedule']['user_create'] = $user['User']['first_name'];
			$this->request->data['Schedule']['viewed'] = 0;
			$this->request->data['Schedule']['download'] = 0;
			$this->Schedule->create();
			if ($this->Schedule->saveAssociated($this->request->data)) {
				$this->Session->setFlash('Lưu thành công tài liệu', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		}
		$this->set('title_for_layout', 'Thêm tài liệu');
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Schedule->exists($id)) {
			throw new NotFoundException(__('Invalid resource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Schedule->id = $id;
			$user = $this->UserAuth->getUser();
			$this->request->data['Schedule']['user_create'] = $user['User']['first_name'];
			if ($this->Schedule->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công tài liệu', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Resource.' . $this->Schedule->primaryKey => $id));
			$this->request->data = $this->Schedule->find('first', $options);
			$this->set('resource_types', $this->Schedule->ScheduleType->find('list'));
			$this->set('file_icons', $this->Schedule->file_icons);
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
		$this->Schedule->id = $id;
		if (!$this->Schedule->exists()) {
			throw new NotFoundException(__('Invalid resource'));
		}
		$this->request->onlyAllow('post', 'delete');
		$resource = $this->Schedule->read(null, $id);
		if ($this->Schedule->delete()) {
			unlink($resource['Schedule']['file_absolute_path']);
			$this->Session->setFlash('Đã xóa tài liệu ' . $resource['Schedule']['title'], 'flash_success');
		} else {
			$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * Upload file
	 * 
	 * @return json result of uploading
	 */
	public function admin_upload() {
		$this->layout = null;
		$this->autoRender = false;
		$path = WWW_ROOT . DS . 'schedules';
		if (!is_dir($path)) {
			mkdir($path);
		}
		$this->Schedule->set($this->request->data);
		$result = array();
		$result['status'] = 0;
		if ($this->Schedule->validates(array('fieldList' => array('file')))) {
			$fileName = $this->request->data['Schedule']['file']['name'];
			$fileName = time() . '_' . $fileName;
			move_uploaded_file($this->request->data['Schedule']['file']['tmp_name'], $path . DS . $fileName);
			$extArr = explode('.', $fileName);
			$ext = array_pop($extArr);
			$result['ext'] = $ext;
			$result['icon'] = Router::url('/', true) . 'img/admin/icons/' . $this->Schedule->file_icons[$ext];
			$result['status'] = 1;
			$result['file_name'] = $fileName;
			$result['message'] = 'Upload tài liệu thành công';
			$webPath = str_ireplace(WWW_ROOT, '', $path);
			$result['file_path'] = '/' . $webPath . '/' . $fileName;
			$result['file_absolute_path'] = $path . DS . $fileName;
			$result['file_size'] = ($this->request->data['Schedule']['file']['size'] / 1000000) . ' MB';
		} else {
			// didn't validate logic
			$errors = $this->Schedule->validationErrors;
			$result['message'] = $errors['file']['0'];
		}

		return json_encode($result);
	}

	public function admin_removeUploaded() {
		$path = $this->request->data['path'];
		$this->layout = false;
		$this->autoLayout = false;
		$this->autoRender = false;
		if (!empty($path))
			unlink($path);
		return json_encode(array('status' => 1));
	}

	public function listResources($id) {
		$this->layout = 'frontend/detailArticle';
		$conditions = array('Resource.resource_type' => $id);
		$this->set('resources', $this->Schedule->find('all', array('conditions' => $conditions)));
		$resource_type = $this->Schedule->resource_type;
		$this->set('title_for_layout', 'Tài liệu - ' . $resource_type[$id]);
	}

	public function view($id) {
		$this->layout = 'frontend/detailArticle';
		$this->set('title_for_layout', 'Xem tài liệu');
		$resource = $this->Schedule->read(null, $id);
		$resource_type = $resource['Schedule']['resource_type'];
		$conditions['AND'] = array('Resource.resource_type' => $resource_type, 'Resource.id !=' => $id);
		$resources = $this->Schedule->find('all', array('conditions' => $conditions));
		$this->set('resource', $resource);
		$this->set('resources', $resources);
	}

}
