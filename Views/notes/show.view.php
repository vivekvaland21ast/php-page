<?php require('views/Partials/header.php') ?>
<?php require('views/Partials/nav.php') ?>
<?php require('views/Partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <!-- <p>Welcome to the notes page</p> -->
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 hover:underline">Go Back</a>
        </p>
        <p>
        <?= htmlspecialchars($note['body']) ?>
        </p>

    </div>
</main>
<?php require('views/Partials/footer.php') ?>