<div class="container mt-5 ">
    <div class="row">
        <h2>Create user</h2>
    </div>
    <div class="row">
        <form action="/user/add" method="post">
            <p><input type="text" name="username" placeholder="username" class="form-control" ></p>
            <p><input type="password" name="password" placeholder="password" class="form-control" ></p>
            <p><input type="mail" name="email" placeholder="email" class="form-control" ></p>
            <p><input type="phone" name="phone" placeholder="phone" class="form-control" ></p>
            <p><input type="number" name="role" placeholder="role" class="form-control" ></p>
            <p><input type="submit" name="submit" value="save" class="btn btn-success" ></p>
        </form>
    </div>
</div>