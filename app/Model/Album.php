<?php

App::uses('AppModel', 'Model');

/**
 * Album Model
 *
 */
class Album extends AppModel {
    /**
     * Use table
     *
     * @var mixed False or table name
     */

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    /**
     * Validation rules
     *
     * @var array
     */
    public $hasMany = array(
        'Photo' => array(
            'className' => 'Photo',
            'foreignKey' => 'album_id'
        )
    );
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Không được để trống tiêu đề',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'created_at' => array(
            'datetime' => array(
                'rule' => array('datetime'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        $this->data[$this->name]['created_at'] = date('Y-m-d H:i:s');
    }

}
