<?php

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

class ContentsController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'logout', 'signup', 'test']);
    }

    public function index($contentType = 'post') {
        $contents = $this->Contents->find('all', [
                    'contain' => [
                        'Users' => [
                            'fields' => ['id', 'first_name', 'last_name', 'profile_picture']
                        ]
                    ]
                ])->where([
                    'content_type' => $contentType
                ])->order(['Contents.id' => 'DESC'])->limit(50);
        $this->set([
            'success' => TRUE,
            'message' => "Content fetched",
            'contents' => $contents,
            '_serialize' => ['success', 'message', 'contents']
        ]);
    }

    public function view($postId, $contentType = 'post') {
        $content = $this->Contents->find('all', [
                    'contain' => [
                        'Users' => [
                            'fields' => ['id', 'first_name', 'last_name', 'profile_picture']
                        ],
						'Comments'=>[
							'Users' => [
	                            'fields' => ['id', 'first_name', 'last_name', 'profile_picture']
	                        ]
						]
                    ]
                ])->where([
                    'content_type' => $contentType,
                    'Contents.id' => $postId
                ])->first();
        $this->set([
            'success' => TRUE,
            'message' => "Content fetched",
            'content' => $content,
            '_serialize' => ['success', 'message', 'content']
        ]);
    }

    public function add() {
        $data = $this->request->data;
        $data['user_id'] = $this->Auth->user('id');
        $content = $this->Contents->newEntity($data);
        //pr($content);exit();
        $this->Contents->save($content);
        $this->set([
            'success' => TRUE,
            'message' => "Content fetched",
            'content' => $content,
            '_serialize' => ['success', 'message', 'content']
        ]);
    }

    public function signup() {
        if ($this->request->is('post')) {
            $user = $this->Users->newEntity();
            $data = $this->request->data;
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->set([
                    'success' => TRUE,
                    'message' => "Signup Successfull",
                    '_serialize' => ['success', 'message']
                ]);
            } else {
                $this->set([
                    'success' => FALSE,
                    'message' => "Signup Failed",
                    '_serialize' => ['success', 'message']
                ]);
            }
        }
    }

}
