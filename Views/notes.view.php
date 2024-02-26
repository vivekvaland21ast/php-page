<?php require('Partials/header.php') ?>
<?php require('Partials/nav.php') ?>
<?php require('Partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <!-- <p>Welcome to the notes page</p> -->
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= $note['body'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
                <p class="mt-6">
                    <a href="#" class="text-blue-500 hover:underline">Create Note</a>
                </p>

    </div>
</main>
<?php require('Partials/footer.php') ?>