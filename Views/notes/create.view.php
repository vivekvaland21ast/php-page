<?php require base_path('views/Partials/header.php') ?>
<?php require base_path('views/Partials/nav.php') ?>
<?php require base_path('views/Partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form method="POST" id="myForm">
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-6 sm:p-6">
                                <div>
                                    <label for="body"
                                        class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                    <div class="mt-2">
                                        <textarea id="body" name="body" rows="5" cols="30"
                                            placeholder="Write a your notes here...."
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['body'] ?? '' ?></textarea>

                                        <?php if (isset($error['body'])): ?>
                                            <p class="text-red-500 text-xs mt-2">
                                                <?= $error['body'] ?>
                                            </p>
                                        <?php endif; ?>

                                    </div>
                                    <!-- <p class="mt-3 text-sm leading-4 text-gray-600">Write a your notes here....</p> -->
                                    <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-5 sm:col-span-4">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- <script>
    function alert() {
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
        });
    }
</script> -->
<?php require base_path('views/Partials/footer.php') ?>