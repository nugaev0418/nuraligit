<?php

namespace controllers;

use models\Post;
use vendor\frame\Controller;

class NewsController extends Controller
{
    public function list()
    {
        $post = new Post();
        $result = $post->getListNews();
        $pagecount = $post->getCountPage();

        $this->render('news/list', ['posts'=>$result,
            'pagecount'=>$pagecount
        ]);
    }

<<<<<<< HEAD
    public function add(){
       if(isset($_GET['submit'])){
           $user = new User();
           $users = $user->getList();
           $comment = new Comment();
           $data = [
               'user_id' => $_POST['user_id'],
               'message' => $_POST['message']
           ];

           $comment->saveCommentNews($data);

           header('location: /news/view/'.$_POST['id']);

       }
        $this->render('news/add', ['comments' => $comment, 'users'=>$users], 'Add news page');
    }

    public function comment($post_id){
=======
    public function view($id){
>>>>>>> 83f1caba8d04b493f41bdab7c9d4016e75d8bcd0
        $post = new Post();
        $result = $post->getByIdNEWS($id);

        $this->render('news/view', ['model' => $result]);
    }
}