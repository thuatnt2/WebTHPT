<?php

/**
 * Routers for backend
 */
Router::connect('/admin', array('controller' => 'admin', 'action' => 'index','admin'=>true));
Router::connect('/dashboard', array('controller' => 'admin', 'action' => 'index','admin'=>true));
Router::connect('/admin/danh-muc', array('controller' => 'categories', 'action' => 'index', 'admin' => true));
Router::connect('/admin/them-danh-muc', array('controller' => 'categories', 'action' => 'add', 'admin' => true));
Router::connect('/admin/danh-sach-bai-viet', array('controller' => 'posts', 'action' => 'index', 'admin' => true));
Router::connect('/admin/them-bai-viet', array('controller' => 'posts', 'action' => 'add', 'admin' => true));

?>
