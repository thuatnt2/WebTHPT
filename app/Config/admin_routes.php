<?php

/**
 * Routers for backend
 */
Router::connect('/admin', array('controller' => 'admin', 'action' => 'index', 'admin' => true));
Router::connect('/dashboard', array('controller' => 'admin', 'action' => 'index', 'admin' => true));
Router::connect('/admin/danh-muc', array('controller' => 'categories', 'action' => 'index', 'admin' => true));
Router::connect('/admin/them-danh-muc', array('controller' => 'categories', 'action' => 'add', 'admin' => true));
Router::connect('/admin/danh-sach-bai-viet', array('controller' => 'posts', 'action' => 'index', 'admin' => true));
Router::connect('/admin/them-bai-viet', array('controller' => 'posts', 'action' => 'add', 'admin' => true));
Router::connect('/admin/videos', array('controller' => 'videos', 'action' => 'index', 'admin' => true));
Router::connect('/admin/them-video', array('controller' => 'videos', 'action' => 'add', 'admin' => true));
Router::connect('/admin/album-anh', array('controller' => 'albums', 'action' => 'index', 'admin' => true));
Router::connect('/admin/album-anh/upload', array('controller' => 'albums', 'action' => 'upload', 'admin' => true));
Router::connect('/admin/album-anh/delete_photo', array('controller' => 'albums', 'action' => 'deletePhoto', 'admin' => true));
?>
