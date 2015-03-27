<?php

App::uses('AppModel', 'Model');
class PostModel extends AppModel {
     public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
