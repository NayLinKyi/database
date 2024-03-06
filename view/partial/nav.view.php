<nav class="d-flex justify-content-between">
    <div>
        <a href="/home">Home</a>
        <a href="about">About</a>
        <a href="contact">Contact</a>
        <a href="notes">My Notes</a>
        <a href="/">LogIn</a>
    </div>

    <?php if (isset($_SESSION['user'])) : ?>
        <p class="pe-4">Hello, <?= $_SESSION['user']['name'] ?></p>
    <?php else : ?>
        <a class="pe-4" href="/register">Register</a>
    <?php endif ?>
</nav>