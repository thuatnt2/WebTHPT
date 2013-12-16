<?php

App::uses('AppModel', 'Model');

/**
 * Resource Model
 *
 */
class Schedule extends AppModel {
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'title';
	public $file_icons = array(
		'pdf' => '_pdf.png',
		'doc' => '_doc.png',
		'docx' => '_docx.png',
		'elt' => '_excel.png',
		'elsx' => '_excel.png',
		'ppt' => '_ppt.png',
	);
	public $resource_type = array(
		1 => 'Giáo án điện tử',
		2 => 'Sách điện tử',
		3 => 'Bộ đề kiểm tra',
	);
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Nhập tiêu đề tài liệu',
			),
		),
		'file' => array(
			'name' => array(
				'rule' => array('extension', array('pdf', 'doc', 'docx', 'elt', 'elsx')),
				'message' => 'Chỉ cho phép các định dạng  pdf, doc, docx,elt, elsx',
			),
			'tmp_name' => array(
				'rule' => array('fileSize', '<=', '10MB'),
				'message' => 'Chỉ được chọn file nhỏ hơn 10M'
			)
		),
	);

}
