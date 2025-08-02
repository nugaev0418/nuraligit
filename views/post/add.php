<div class="container mt-5 ">
    <div class="row">
        <h2>Create post</h2>
    </div>
    <div class="row">
        <form action="/post/add" method="post" enctype="multipart/form-data">
            <p>
                <select name="category_id" class="form-control" >
                   <?php foreach($categories as $category): ?>
                      <option value="<?= $category->id ?>"><?= $category->name ?>
                        </option>
                   <?php endforeach; ?>

                </select>
            </p>
            <p><input type="text" name="title" placeholder="title" class="form-control" ></p>
            <p><input type="text" name="small_text" placeholder="small_text" class="form-control" ></p>
            <p><input type="text" name="full_text" placeholder="full_text" class="form-control" ></p>
            <p><input type="file" name="image_file" placeholder="image_file" class="form-control" ></p>
            <p><input type="number" name="status" placeholder="status" class="form-control" ></p>
            <p><input type="number" name="author" placeholder="author" class="form-control" ></p>
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>
            
        </form>
    </div>
</div>