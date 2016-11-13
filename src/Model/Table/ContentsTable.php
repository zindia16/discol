<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ContentsTable extends Table
{
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users');
        $this->hasMany('Comments');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('text', 'Content is required');
    }

}