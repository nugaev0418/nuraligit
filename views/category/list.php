<div class="container mt-5 mb-5">
    <div class="row">
        <h2>Categories</h2>
         <p><a href="/category/add" class="btn btn-success">Create category</a></p>
<table class="table">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>slug</th>
        <th>actions</th>
    </tr>
     <?php foreach($result as $row): ?>
       <tr>
        <td><?= $row->id; ?></td>
        <td><?= $row->name; ?></td>
        <td><?= $row->slug; ?></td>
        <td>
            <div class="btn-group">
                 <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                 </button>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/category/view/<?= $row->id; ?>">View</a></li>
                        <li><a class="dropdown-item" href="/category/update/<?= $row->id; ?>">Edit</a></li>
                        <li><a class="dropdown-item" href="/category/delete/<?= $row->id; ?>">Delete</a></li>
                     </ul>
            </div>
        </td>
       </tr> 
     <?php endforeach; ?>     
</table>
   
    <?php if($getcountpage > 0): ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <?php for($page = 1; $page <= $getcountpage; $page++): ?>
                <li class="page-item"><a class="page-link" href="/category/list?page=<?= $page ?>"><?= $page ?></a></li>
                <?php endfor; ?>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <?php endif;  ?>
    </div>
</div>