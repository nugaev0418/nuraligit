<div class="container mt-5">
    <div class="row">
        <div class="card p-3 mb-3">
            <h2><?= $model->title ?></h2>
            <p class="text-secondary">🧑‍💻: <?= $model->username ?> 📃: <?= $model->name ?> ⌚: <?= $model->created_at ?></p>
            <p><?= $model->full_text ?></p>
        </div>

        <div class="card mt-5 p-4">
            <h4>Kommentariyalar</h4>
            <p>
                <h5>Sardor</h5>
                <p>Salom maqola juda ajoyib!</p>
            </p>

            <p>
            <h5>Nuarli</h5>
            <p>Salom yomadi!</p>
            </p>

            <div class="col-md-6">
<<<<<<< HEAD

                <form method="post">
                    <p><input type="int" name="user_id" class="form-control" placeholder="User_id"></p>
                    <p><textarea name="message" id="" cols="30" rows="10" class="form-control" ></textarea></p>
                    <p><input type="submit" name="submit" value="Yuborish1" class="btn btn-success"></p>
=======
                <form>
                    <p><input type="text" name="username" placeholder="Username" class="form-control"></p>
                    <p><textarea name="" id="" cols="30" rows="10" class="form-control"    ></textarea></p>
                    <p><input type="submit" value="Yuborish" class="btn btn-success"></p>
>>>>>>> 83f1caba8d04b493f41bdab7c9d4016e75d8bcd0
                </form>
            </div>
        </div>
    </div>
</div>


