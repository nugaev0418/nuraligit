<div class="container mt-5 ">
    <div class="row">
        <h2>Update category</h2>
    </div>
    <div class="row">
        <form action="" method="post">

            <p><input type="text" name="name" placeholder="name" class="form-control" value="<?= $model->name; ?>"></p>
            <p><input type="text" name="slug" placeholder="slug" class="form-control" value="<?= $model->slug; ?>"></p>
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>

        </form>
    </div>
</div>