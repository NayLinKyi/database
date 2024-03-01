<?php
require('partial/head.view.php');
require('controllers/database.php');
// require('partial/banner.view.php');
?>
<main class="mt-3 container-fluid">
    <form class="border border-black m-3 p-3" action="<?php htmlspecialchars("/") ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit">Log In</button>
        <div>
            <a href="/signup">Haven't acc? Register here</a>
        </div>
    </form>

</main>

<?php require('partial/footer.view.php'); ?>