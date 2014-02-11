<?php

App::uses('AppModel', 'Model');

/**
 * Resource Model
 *
 */
class Resource extends AppModel {
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'title';
	public $resource_type = array(
		'TNDT' => array(
			1 => 'Giáo án',
			2 => 'Sáng kiến kinh nghiệm',
			3 => 'Các bộ đề kiểm tra',
			5 => 'Tài liệu tham khảo',
			6 => 'Phần mềm phục vụ giáo dục',
			7 => 'Kinh nghiệm dạy học',
		),
		'KQHT' => array(
			8 => 'Khối 10',
			9 => 'Khối 11',
			10 => 'Khối 12',
		),
	);
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Nhập tiêu đề tài liệu',
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'link' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Nhập link Dropbox của tài liệu',
			),
			'checkExt' => array(
				'rule' => 'checkExt',
				'message' => 'Chỉ chấp nhận tập tin có định dạng doc, docx, và pdf',
			),
			'checkDropboxLink' => array(
				'rule' => 'checkDropboxLink',
				'message' => 'Bạn phải nhập link từ trang web dropbox.com'
			),
		)
	);

	public function checkExt($data) {
		$extAllow = array('doc', 'docx', 'pdf');
		$tmp = explode('.', $data['link']);
		$ext = $tmp[count($tmp) - 1];
		//check if the link is link to file
		if (strlen($ext) > 4) {
			return false;
		}
		if (in_array($ext, $extAllow)) {
			return true;
		} else {
			return false;
		}
	}

	public function checkDropboxLink($data) {

		if (strpos($data['link'], 'www.dropbox.com') === false) {
			return false;
		} else {
			return true;
		}
	}

	public function getExtFile($data) {
		$tmp = explode('.', $data);
		$ext = $tmp[count($tmp) - 1];
		return $ext;
	}

}
