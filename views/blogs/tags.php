<section class="text-gray-600 dark:text-gray-400 body-font overflow-hidden bg-gray-200 dark:bg-gray-700">
    <div class="container px-5 py-12 mx-auto min-h-screen">
        <div class="divide-y-2 divide-gray-300 ">
            <h3 class="py-2 text-xl">Tag Blog</h3>
            <div class="pt-4 grid grid-cols-4 gap-2">

                <?php
                foreach ($data["tagsAll"] as $key => $value) {
                ?>
                    <a href="<?= $data["baseUrl"] ?>/blogs/search/tag=<?= str_replace(" ", "_", $value["name"]) . "-" . $value["id"] ?>" class="flex justify-center items-center p-6 rounded-lg shadow-lg bg-white hover:bg-emerald-100 hover:drop-shadow-lg dark:bg-gray-600 dark:hover:bg-gray-700 dark:hover:drop-shadow-lg max-w-sm">
                        <div class="text-gray-900 dark:text-white text-xl leading-tight font-medium">
                            <?= $value["name"] ?>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>