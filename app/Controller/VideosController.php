<?php

App::uses('AppController', 'Controller');

/**
 * Videos Controller
 *
 * @property Video $Video
 * @property PaginatorComponent $Paginator
 */
class VideosController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';
	
	public function index(){
		$this->layout = 'frontend/default';
		$this->paginate = array('limit' => $this->limit);
		$videos = $this->Paginator->paginate();
                $videoDefault = $this->Video->find('first');
		$this->set('title_for_layout','Danh sách video');
		$this->set(compact('videoDefault','videos'));
	}
	
	public function view($id){
		$this->layout = 'frontend/detailArticle';
		$video = $this->Video->read(null, $id);
		$this->set('title_for_layout','Xem video');
		$this->set('video',$video);
		
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Video->recursive = 0;
		$this->paginate = array('limit' => $this->limit);
		$this->set('videos', $this->Paginator->paginate());
		$this->set('title_for_layout' , 'Danh sách videos');
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Video']['alias'] = $this->Common->vnit_change_title($this->request->data['Video']['title']);
			$link = $this->request->data['Video']['link'];
			$pos = strpos($link, 'v=');
			$youtube_id  = substr($link, $pos+2);
			$this->request->data['Video']['youtube_id'] = $youtube_id;
			$this->Video->create();
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công','flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
			}
		}
		$this->set('title_for_layout' , 'Thêm video');
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công','flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$this->set('title_for_layout' , 'Chỉnh sửa video');
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Video->id = $id;
		if (!$this->Video->exists()) {
			throw new NotFoundException(__('Invalid video'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Video->delete()) {
			$this->Session->setFlash('Xóa thành công','flash_success');
		} else {
			$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại','flash_error');
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function admin_videoActive($id,$status){
		$this->Video->id = $id;
		$this->Video->saveField('is_active', $status);
		$this->redirect('index');
	}

}
