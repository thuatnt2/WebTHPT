<?php

App::uses('AppController', 'Controller');

class SettingController extends AppController {

    public $layout = 'admin/admin';

    
    // Chuyển qua controller mới, ko dùng action trong Admin Controller nữa
    public function admin_view() {
        $this->loadModel('Link');
        $this->set('links', $this->Link->find('all'));
        $this->set('linkTypes', $this->Link->linkTypes);
        $this->loadModel('Page');
        $contact_page = 1;
    }
}

?>
