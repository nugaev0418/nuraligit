<?php
namespace controllers;
use models\Category;
use models\Post;
use vendor\frame\Controller;

class PostController extends Controller {
    public function list(){
        $post = new Post();
        $result = $post->getList();
        $pagecount = $post->getCountPage();


        $this->render('post/list', ['posts'=>$result,
            'pagecount'=>$pagecount

        ]);

    }
    public function view($id){
        $post = new Post();
        $result = $post->getById($id);

        $this->render('post/view', ['model' => $result]);
    }

    public function add(){
        $categories = new Category();
        $categories = $categories->getList();
        if(isset($_POST['submit']) ){

            $target_dir = "uploads/post/";
            $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["image_file"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";

                } else {
                    //echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            if (file_exists($target_file)) {
                //echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                //echo "Sorry, your file was not uploaded.";

            } else {
                if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["image_file"]["name"])). " has been uploaded.";
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
            }


            $post = new Post();
            $data = [
                'title'=> $_POST['title'],
                'author'=> $_POST['author'],
                'small_text'=> $_POST['small_text'],
                'full_text'=> $_POST['full_text'],
                'image'=> $target_file,
                'status'=> $_POST['status'],

                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')

            ];

            $post->save($data);

            header('Location: /post/list');
            exit();
        }

        $this->render('post/add', ['categories'=> $categories]);
    }

    public function update($id){
        $post = new Post();
        if(isset($_POST['submit']) ){

            $data = [
                'title'=> $_POST['title'],
                'small_text'=> $_POST['small_text'],
                'full_text'=> $_POST['full_text'],
                'status'=> $_POST['status'],
                'author'=> $_POST['author']

            ];

            if($_FILES["image_file"]["name"] != ""){
                $target_dir = "uploads/post/";
                $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
                $uploadOk = 1;

                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["image_file"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }

                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                } else {
                    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["image_file"]["name"])). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                $data['image'] = $target_file;
            }

            $post->update($id, $data);
            header('Location: /post/list');
            exit();
        }
        $result = $post->getById($id);

        $this->render('post/update', ['post' => $result]);
    }

    public function delete($id){
        $post = new Post();
        $post->delete($id);
        header('Location: /post/list');
        exit();
    }

}

