<div class="container mt-5 ">
    <div class="row">
        <h2>Create category</h2>
    </div>
    <div class="row">
        <form action="/category/add" method="post">
            <p><input type="text" name="name" placeholder="name" class="form-control" ></p>
            <p><input type="text" name="slug" placeholder="slug" class="form-control" ></p>  
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>       
        </form>
    </div>
</div>