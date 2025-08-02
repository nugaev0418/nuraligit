<div class="container " style="padding-top: 120px;">
    <div class="row ">
        <h3>User View</h3>
        <p>
            <a href="/user/update/<?= $user->id ?>" class="btn btn-primary">Edit</a>
            <a href="/user/delete/<?= $user->id ?>" class="btn btn-danger">Delete</a>
        </p>
        <table class="table table-striped table-hover">
            <?php foreach ($user as $key => $row): ?>
                <tr>
                    <td style="text-transform: uppercase;"><?= $key;?></td>
                    <td><?= $row;?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>