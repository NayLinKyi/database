<?php
require('partial/head.view.php');
require('controllers/database.php');
// require('partial/banner.view.php');
?>
<main class="mt-3">
<form class="border border-black m-3 p-3" action="<?php htmlspecialchars("/signup") ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit">Sign Un</button>
    </form>
</main>

<?php require('partial/footer.view.php'); ?>