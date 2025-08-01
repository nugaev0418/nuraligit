<div class="container" style="padding-top: 120px;">
    <div class="row ">
        <h3>Comment View</h3>
        <p>
            <a href="/comment/update/<?= $model->id ?>" class="btn btn-primary">Edit</a>
            <a href="/comment/delete/<?= $model->id ?>" class="btn btn-danger">Delete</a>
        </p>
        <table class="table table-striped table-hover">
            <?php foreach ($model as $key => $row): ?>
                <tr>
                    <td style="text-transform: uppercase;"><?= $key;?></td>
                    <td><?= $row;?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>