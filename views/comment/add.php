<div class="container mt-5 ">
    <div class="row">
        <h2>Create comment</h2>
    </div>
    <div class="row">

        <form action="/comment/add" method="post">
       <p>
         <select name="user_id" class="form-control" >
            <?php foreach($users as $user): ?>
                <option value="<?= $user->id?>"><?= $user->username; ?></option>
            <?php endforeach; ?>    
         </select>
       </p> 
       <p>
         <select name="post_id" class="form-control" >
            <?php foreach($posts as $post): ?>
                <option value="<?= $post->id; ?>"><?= $post->title; ?></option>
            <?php endforeach; ?>    
         </select>
       </p> 
            <p><input type="text" name="message" placeholder="message" class="form-control" ></p>
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>
            
        </form>
    </div>
</div>