<?php
namespace controllers;
use models\Category;
use vendor\frame\Controller;

class CategoryController extends Controller{
    public $id;

    public function list(){
        $category = new Category();
        $result = $category->getList();
        $getcountpage = $category->getCountPage();

        $this->render('category/list', ['result'=>$result,
        'getcountpage'=>$getcountpage], 'Category page list');


    }

    public function view($id){
        $category = new Category();
        $result = $category->getById($id);

        $this->render('category/view', ['model' => $result], 'Category view page');
        }
    public function add(){

        if(isset($_POST['submit'])){
            $category = new Category();
            $data = [
            'name'=> $_POST['name'],
            'slug'=> $_POST['slug']
            ];
            $category->save($data);
            header('Location:/category/list');
            exit();
        }
        $this->render('category/add', [], 'Category add page');


    }
    public function delete($id){
        $category = new Category();
        $category->delete($id);
        header('Location:/category/list');
        exit();
    }

   public  function update($id){
       $category = new Category();
        if(isset($_POST['submit'])){

            $data = [
                'name'=> $_POST['name'],
                'slug'=> $_POST['slug']
            ];
            $category->update($id, $data);
            header('Location:/category/list');
            exit();


        }
       $result = $category->getById($id);
       $this->render('category/update', ['model' => $result], 'Category edit page');


   }


}
