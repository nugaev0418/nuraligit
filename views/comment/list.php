<div class="container mt-5 mb-5">
    <div class="row">
        <h2>Comments</h2>
        <p><a href="/comment/add" class="btn btn-success">Create comment</a></p>
<table class="table">
    <tr>
        <th>Id</th>
        <th>post id</th>
        <th>message</th>
        <th>user id</th>
        <th>created at</th>
    </tr>
     <?php foreach($comments as $row): ?>
       <tr>
        <td><?= $row->id; ?></td>
        <td><?= $row->post_id; ?></td>
         <td><?= $row->message; ?></td>
         <td><?= $row->user_id; ?></td>
        <td><?= $row->created_at; ?></td>
        <td>
            <div class="btn-group">
                 <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                 </button>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/comment/view/<?= $row->id; ?>">View</a></li>
                        <li><a class="dropdown-item" href="/comment/update/<?= $row->id; ?>">Edit</a></li>
                        <li><a class="dropdown-item" href="/comment/delete/<?= $row->id; ?>">Delete</a></li>
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
                <li class="page-item"><a class="page-link" href="/comment/list?page=<?= $page ?>"><?= $page ?></a></li>
                <?php endfor; ?>
               
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <?php endif;  ?>
    </div>
</div>