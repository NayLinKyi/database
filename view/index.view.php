<?php
require('partial/head.view.php');
require('controllers/database.php');
// require('partial/banner.view.php');
?>
<main>
    <form class="d-flex align-items-center justify-content-center" style="height: 100vh; background-image: url(https://e1.pxfuel.com/desktop-wallpaper/646/773/desktop-wallpaper-login-page-login.jpg); background-repeat: no-repeat; background-size: cover;"
         action="<?php htmlspecialchars("./controllers/index.php") ?>" method="post">
        <div class="border border-black m-3 p-3" style="width: 300px;">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-dark">Log In</button>
            <div>
                <p class="mb-1 mt-3">Haven't account yet? <a href="/signup">Register here</a></p>
            </div>
        </div>

    </form>

</main>

<?php require('partial/footer.view.php'); ?>