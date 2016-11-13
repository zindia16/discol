<?php
namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController
{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['login','logout','signup','test']);
    }
    
    public function test(){
        $this->set([
                    'success'=>TRUE,
                    'message'=>'test was successful',
                    '_serialize'=>['success','message']
                ]);
    }

    public function index(){
        $this->set('users', $this->Users->find('all'));
    }
    
    public function signup(){        
        if ($this->request->is('post')) {
            $user = $this->Users->newEntity();
            $data = $this->request->data;           
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->set([
                    'success' => TRUE,
                    'message'=> "Signup Successfull",
                    '_serialize'=>['success','message']
                ]);
            }else{
                $this->set([
                    'success' => FALSE,
                    'message'=> "Signup Failed",
                    '_serialize'=>['success','message']
                ]);
            }            
        }
    }
    
    public function login(){
        if ($this->request->is('post')) {
            //$user = $this->Auth->identify();
            $data = $this->request->data;
            if(empty($data['username']) || empty($data['password'])){
                $this->set([
                    'success' => FALSE,
                    'message'=> "Invalid username or password, try again",
                    '_serialize'=>['success','message']
                ]);
            }else{
                /*
                $hasher = new DefaultPasswordHasher();
                $hashedPassword = $hasher->hash($data['password']);
                pr($hashedPassword);exit();
                $user = $this->Users->find('all')->where([
                    'username'=>$data['username'],
                    'password'=>  $hashedPassword
                ])->first();
                 * 
                 */  
                $user=$this->Auth->identify();
                if ($user) {
                    $token=  base64_encode($data['username'].":".$data['password']);                                       
                    $this->set([
                        'success' => TRUE,
                        'message'=> "Welcome",
                        'token'=>$token,
                        'user'=>$user,
                        '_serialize'=>['success','message','token','user']
                    ]);
                }else{
                    $this->set([
                        'success' => FALSE,
                        'message'=> "Invalid username or password, try again",
                        '_serialize'=>['success','message']
                    ]);
                }
            }            
        }
    }   
    
}

