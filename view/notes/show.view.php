<?php 

require ('view/partial/head.view.php');
require ('view/partial/nav.view.php');
require ('view/partial/banner.view.php');
?>

<main>

    <a href="/notes">back to all notes</a>

    <h3><?= htmlspecialchars($note['body'])  ?></h3>

    <form action="/note" method="POST">
        <input type="hidden" name="method" value="delete">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>

    <a class="btn btn-sm btn-secondary mt-2"  href="/note/edit?id=<?= $note['id'] ?>">Edit</a>
</main>

<?php require ('view/partial/footer.view.php'); ?>

