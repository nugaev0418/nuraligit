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

    public function view($id){
        $post = new Post();
        $result = $post->getByIdNEWS($id);

        $this->render('news/view', ['model' => $result]);
    }
}