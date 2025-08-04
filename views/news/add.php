<div class="col-md-6">
    <form method="POST" action="news/add">
        <p>
            <select name="user_id" class="form-control" >
                <?php foreach($users as $user): ?>
                    <option value="<?= $user->id ?>"><?= $user->username ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </p>

        <p><textarea name="textarea" id="" cols="30" rows="10" class="form-control"  ></textarea></p>
        <p><input type="submit" value="Yuborish" class="btn btn-success"></p>

    </form>
</div>
