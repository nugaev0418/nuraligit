<?php
namespace controllers;
use models\Comment;
use vendor\frame\Controller;
use models\User;
use models\Post;

class CommentController extends Controller {
    public function list(){
         $comment = new Comment();
         $result = $comment->getList();
         $pagecount = $comment->getCountPage();
             
      $this->render('comment/list', ['comments'=>$result,
      'pagecount'=>$pagecount], 'Comment list page');
    

    }
    public function view($id){
        $comment = new Comment();
        $result = $comment->getById($id);
      
     $this->render('comment/view', ['model' => $result], 'Comment view page');
    }
    public function add(){
       
        if(isset($_POST['submit'])){
            $comment = new Comment();
            $data = [
                'user_id'=> $_POST['user_id'],
                'post_id'=> $_POST['post_id'],
                'message'=> $_POST['message'],
                 'created_at'=> date('Y-m-d H:i:s'),
                 'updated_at'=> date('Y-m-d H:i:s')
               
               
            ];
             
            $comment ->save($data);
            header('Location: /comment/list');
            exit();
        }

            $userModel = new User();
            $users = $userModel->getList();

            $postModel = new Post();
            $posts = $postModel->getList();

            $this->render('comment/add', [
                'users' => $users,
                'posts' => $posts
            ], 'Comment add page');
    }

    public function update($id){
        $comment = new Comment();
        if(isset($_POST['submit'])){
            $data = [
                'user_id'=> $_POST['user_id'],
                'post_id'=> $_POST['post_id'],
                'message'=> $_POST['message'],
            ];
            $comment -> update($id,$data);
            header('Location:/comment/list');
            exit();
        }
           $result = $comment->getById($id);
      
           $this->render('comment/update', ['model' => $result], 'Comment edit page');
    }
    public function delete($id){
        $comment = new Comment();
        $comment->delete($id);
        header('Location:/comment/list');
        exit();
    }


    
}