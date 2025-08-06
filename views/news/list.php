<div class="container mt-5">
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="card p-3 mb-3">
            <h2><?= $post->title ?></h2>
            <p class="text-secondary">🧑‍💻: <?= $post->username ?> 📃: <?= $post->name ?> ⌚: <?= $post->created_at ?></p>
            <p><?= $post->small_text ?></p>
            <p>
                <a href="/news/view/<?= $post->id?>" class="btn btn-primary">Batafsil -></a>
            </p>
        </div>
        <?php endforeach ?>

        <?php if($pagecount > 0): ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <?php for($page = 1; $page <= $pagecount; $page++): ?>
                        <li class="page-item"><a class="page-link" href="/news/list?page=<?= $page ?>"><?= $page ?></a></li>
                    <?php endfor; ?>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        <?php endif;  ?>
    </div>
</div>