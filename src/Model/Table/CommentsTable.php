<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table
{
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', [
            'Contents' => [
                'comment_count' => [
                    'conditions' => ['Comments.is_published' => 1, 'Comments.is_deleted' => 0]
                ]
            ]
        ]);
        $this->belongsTo('Users');
        $this->belongsTo('Contents');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('text', 'Content is required');
    }

}