<?php
namespace controllers;
use models\User;
use vendor\frame\Controller;


class UserController extends Controller {
    public function list(){
         $user = new User();
         $result = $user->getList();
         $pagecount = $user->getCountPage();
         
             
      $this->render('user/list', ['users'=>$result,
      'pagecount'=>$pagecount], 'User list page');
    
  

    }
    public function view($id){
        $user = new User();
        $result = $user->getById($id);
      
     $this->render('user/view', ['user' => $result], 'User view page');
    }
     public function add(){
        if(isset($_POST['submit'])){
            $user = new User();
            $data = [
                'username'=> $_POST['username'],
                'email'=> $_POST['email'],
                'password'=> $_POST['password'],
                'phone'=> $_POST['phone'],
                'role'=> $_POST['role']
            ];
            $user->save($data);
            header('Location:/user/list');
            exit();
        }
        $this->render('user/add', [], 'User add page');
        

     }
     public function update($id){
        $user = new User();
        if(isset($_POST['submit'])){
            $data = [
                'username'=> $_POST['username'],
                'email'=> $_POST['email'],
                'password'=> $_POST['password'],
                'phone'=> $_POST['phone'],
                'role'=> $_POST['role']

            ];
            $user->update($id,$data);
            header('Location: /user/list');
            exit();
        }
        $result = $user->getById($id);
      
     $this->render('user/update', ['user' => $result], 'User edit page');
    }
    public function delete($id){
        $user = new User();
        $user->delete($id);
        header('Location:/user/list');
        exit();
    }
    

}