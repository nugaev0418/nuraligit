<div class="container mt-5 ">
    <div class="row">
        <h2>Update comment</h2>
    </div>
    <div class="row">
        <form action="" method="post">
            
            <p><input type="int" name="post_id" placeholder="post_id" class="form-control" value="<?= $model->post_id; ?>"></p>
            <p><input type="text" name="message" placeholder="message" class="form-control" value="<?= $model->message; ?>"></p>
            <p><input type="int" name="user_id" placeholder="user_id" class="form-control" value="<?= $model->user_id; ?>"></p>
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>
            
        </form>
    </div>
</div>