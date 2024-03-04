<?php

require('view/partial/head.view.php');
require('view/partial/nav.view.php');
require('view/partial/banner.view.php');
?>

<main>

    <a href="/notes">back to all notes</a>

    <form action="/notes/create" method="POST">
        <label for="body">Description</label>
        <div>
            <textarea name="body" id="body" cols="30" rows="10"><?=  $_POST['body'] ?? '' ?></textarea>

        </div>
        <?php if(isset($error)) : ?>
            <p class="text-danger"><?= $error ?></p>
        <?php endif ?>
        <button type="submit">Create</button>
    </form>

</main>

<?php require('view/partial/footer.view.php'); ?>