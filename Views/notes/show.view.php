<?php require base_path('views/Partials/header.php') ?>
<?php require base_path('views/Partials/nav.php') ?>
<?php require base_path('views/Partials/banner.php') ?>


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

        <footer class="mt-6">
            <a class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                href="/note/edit?id=<?= $note['id'] ?>">Edit</a>
        </footer>
        <!-- <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="">
            <button
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700">Delete</button>
        </form> -->

    </div>
</main>
<?php require base_path('views/Partials/footer.php') ?>