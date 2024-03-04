<?php 

require ('view/partial/head.view.php');
require ('view/partial/nav.view.php');
require ('view/partial/banner.view.php');
?>

<main>

    <a href="/notes">back to all notes</a>

    <h3><?= htmlspecialchars($note['body'])  ?></h3>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
</main>

<?php require ('view/partial/footer.view.php'); ?>

