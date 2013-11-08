<?php

App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility'); // for upload image
/**
 * Albums Controller
 *
 * @property Album $Album
 * @property PaginatorComponent $Paginator
 */

class AlbumsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
//    public $layout = 'admin/admin';
    public $uses = array('Album', 'Photo');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
//        $this->layout = 'admin/admin';
        $this->Album->recursive = 0;
        $this->set('albums', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Album->exists($id)) {
            throw new NotFoundException(__('Invalid album'));
        }
        $options = array('conditions' => array('Album.' . $this->Album->primaryKey => $id));
        $this->set('album', $this->Album->find('first', $options));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'admin/admin';
        $this->Album->recursive = 1;
        $albums = $this->Album->find('all');
        $this->set('albums', $albums);
        $this->log($albums, 'debug');
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->layout = 'admin/admin';
        if (!$this->Album->exists($id)) {
            throw new NotFoundException(__('Invalid album'));
        }
        $options = array('conditions' => array('Album.' . $this->Album->primaryKey => $id));
        $this->log($this->Album->find('first', $options), 'debug');
        $this->set('album', $this->Album->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = 'admin/admin';
        if ($this->request->is('post')) {
            $this->Album->create();
            if ($this->Album->save($this->request->data)) {
                $this->Session->setFlash(__('The album has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->layout = 'admin/admin';
        if (!$this->Album->exists($id)) {
            throw new NotFoundException(__('Invalid album'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Album->save($this->request->data)) {
                $this->Session->setFlash(__('The album has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Album.' . $this->Album->primaryKey => $id));
            $this->request->data = $this->Album->find('first', $options);
        }
    }

    public function admin_upload() {
        $this->autoRender = false;
        $this->log($this->request->data, 'debug');
        $album_id = $this->request->data['album_id'];
        $photo_temps = $this->request->data['Photos'];
        //Create folder to upload
        $folder = new Folder();
        $path = WWW_ROOT . 'img/albums' . DS . $album_id;
        $folder->create($path);
        foreach ($photo_temps as $tmp) {
            if (empty($tmp['tmp_name'])) {
                continue;
            }
            $photo = array();
            $photo['Photo']['album_id'] = $album_id;
            $photo['Photo']['url'] = $tmp['name'];
            move_uploaded_file($tmp['tmp_name'], $path . DS . $tmp['name']);
            $this->Photo->create();
            $this->Photo->save($photo);
        }
        $this->redirect(Router::url('/admin/albums/view/' . $album_id));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Album->id = $id;
        if (!$this->Album->exists()) {
            throw new NotFoundException(__('Invalid album'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Album->delete()) {
            $this->Session->setFlash(__('The album has been deleted.'));
        } else {
            $this->Session->setFlash(__('The album could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function admin_deletePhoto() {
        $this->autoRender = false;
        $this->response->type('json');
        $resp = array();
        $resp['success'] = false;
        $photo_id = $this->request->data['photo_id'];
        $album_id = $this->request->data['album_id'];
        $photo_will_del = $this->Photo->read(null, $photo_id);
        if ($photo_will_del['Photo']['album_id'] == $album_id) {
            if ($this->Photo->delete($photo_id)) {
                $resp['success'] = true;
            }
        }
        $this->response->body(json_encode($resp));
    }

}
