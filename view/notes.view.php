<?php 

require ('partial/head.view.php');
require ('partial/nav.view.php');
require ('partial/banner.view.php');
?>

<main>


    <?php foreach($notes as $note) : ?>
        <a href="/note?id=<?= $note['id'] ?>">
            <li><?= $note['body'] ?></li>
        </a>
    <?php endforeach ?>

</main>

<?php require ('partial/footer.view.php'); ?>

