<?php

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

    var $layout = 'frontend/teacher';

    public function index() {
        $title_for_layout = "Blog giáo viên";
        $this->set(compact('title_for_layout'));
    }

}

?>
