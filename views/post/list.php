<div class="container mt-5 mb-5">
    <div class="row">
        <h2>Posts (lar)</h2>
        <p><a href="/post/add" class="btn btn-success">Create post</a></p>
        <table class="table">
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>category</th>
            <th>image_file</th>
            <th>created at</th>
            <th>actions</th>
        </tr>
            <?php foreach($posts as $post): ?>
            <tr>
            <td><?= $post->id; ?></td>
            <td><?= $post->title; ?></td>
                <td><?= $post->image; ?></td>
            <td><?= $post->category_id; ?></td>
            <td><?= $post->created_at; ?></td>

            <td>
                <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                        </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/post/view/<?= $post->id; ?>">View</a></li>
                            <li><a class="dropdown-item" href="/post/update/<?= $post->id; ?>">Edit</a></li>
                            <li><a class="dropdown-item" href="/post/delete/<?= $post->id; ?>">Delete</a></li>
                            </ul>
                </div>
            </td>
            </tr> 
            <?php endforeach; ?>     
        </table>
          <?php if($pagecount > 0): ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <?php for($page = 1; $page <= $pagecount; $page++): ?>
                <li class="page-item"><a class="page-link" href="/post/list?page=<?= $page ?>"><?= $page ?></a></li>
                <?php endfor; ?>       
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <?php endif;  ?>

    </div>
                </div>