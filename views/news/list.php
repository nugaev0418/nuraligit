<div class="container mt-5">
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="card p-3 mb-3">
        </div>
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