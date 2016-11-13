<?php

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

class CommentsController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'logout', 'signup', 'test']);
    }

    public function add() {
        $data = $this->request->data;
        $ndata['user_id'] = $this->Auth->user('id');
        $ndata['content_id'] = $data['contentId'];
        $ndata['text']=$data['text'];
        $ndata['is_published']=1;
        $comment = $this->Comments->newEntity($ndata);
        //pr($content);exit();
        $this->Comments->save($comment);
        $this->set([
            'success' => TRUE,
            'message' => "Comment Saved",
            'comment' => $comment,
            '_serialize' => ['success', 'message', 'comment']
        ]);
    }
    

}
