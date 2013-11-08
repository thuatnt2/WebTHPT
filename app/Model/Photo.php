<?php

App::uses('AppModel', 'Model');

/**
 * Photo Model
 *
 * @property Album $Album
 */
class Photo extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Album' => array(
            'className' => 'Album',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public function afterDelete() {
        parent::afterDelete();
        //Delete file after delete record
        $path = WWW_ROOT . 'img/albums' . DS . $this->data['Photo']['album_id'] . DS . $this->data['url'];
        unlink($path);
    }

}
