<div class="container mt-5 ">
    <div class="row">
        <h2>Update post</h2>
    </div>
    <div class="row">
        <form action="" method="post" enctype="multipart/form-data">
        
            <p><input type="text" name="title" placeholder="title" class="form-control" value="<?= $post->title; ?>" ></p>
            <p><input type="text" name="small_text" placeholder="small_text" class="form-control" value="<?= $post->small_text; ?>" ></p>
            <p><input type="text" name="full_text" placeholder="full_text" class="form-control" value="<?= $post->full_text; ?>" ></p>
            <p><input type="file" name="image_file" placeholder="image_file" class="form-control" ></p>
            <p><input type="number" name="status" placeholder="status" class="form-control" value="<?= $post->status; ?>" ></p>
            <p><input type="number" name="author" placeholder="author" class="form-control" value="<?= $post->author; ?>" ></p>
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>
            
        </form>
    </div>
</div>