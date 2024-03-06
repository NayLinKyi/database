<?php

require('view/partial/head.view.php');
require('view/partial/nav.view.php');
require('view/partial/banner.view.php');
?>

<main>

    <a href="/notes">back to all notes</a>

    <form action="/note" method="POST">
        <input type="hidden" name="method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">

        <label for="body">Description</label>
        <div>
            <textarea name="body" id="body" cols="30" rows="10"><?=  $_POST['body'] ?? $note['body'] ?></textarea>

        </div>
        <?php if(isset($error)) : ?>
            <p class="text-danger"><?= $error ?></p>
        <?php endif ?>
        <button type="submit">Update</button>
    </form>

</main>

<?php require('view/partial/footer.view.php'); ?>