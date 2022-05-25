<div class="container mt-5 mb-5 ">

    <form action="../app/control/user/create.php" method="POST" enctype="multipart/form-data">

        <div class="form-group ">
            <label for="exampleInputEmail1">name </label>
            <input type="text" class="form-control border border-primary p-3 " name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
        </div>
        <div class="form-group ">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control border border-primary p-3 " name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control border border-primary p-3" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group ">
            <label for="exampleInputEmail1">image</label>
            <input type="file" class="form-control   " name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="image">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>