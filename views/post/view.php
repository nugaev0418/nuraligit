
<div class="container" style="padding-top: 120px;">
    <div class="row ">
        <h3>Post View</h3>
        <p>
            <a href="/post/update/<?= $model->id ?>" class="btn btn-primary">Edit</a>
            <a href="/post/delete/<?= $model->id ?>" class="btn btn-danger">Delete</a>
        </p>
        <table class="table table-striped table-hover">
            <?php foreach ($model as $key => $row): ?>
                <tr>
                    <td style="text-transform: uppercase;"><?= $key;?></td>
                    
                    <?php if ($key == 'image'): ?>
                          <td>
                              <img class="card" width="130" src="/<?= $row;?>" alt="">
                          </td>
                    <?php else: ?>
                        <td><?= $row;?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>