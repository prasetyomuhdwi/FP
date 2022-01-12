<section class="bg-gray-50 dark:text-gray-400 dark:bg-gray-900 body-font">
    <div class="h-screen bg-green-300 dark:bg-gray-700">

        <div class="h-3/4">
            <div class="max-w-full mx-auto px-4 pt-4 lg:pt-0 h-full flex justify-center items-center">
                <div class="dark:text-white">
                    <div class="w-full inline-flex justify-center items-center">
                        <img id="logo-search" src="<?= $data['baseUrl'] ?>/assets/image/logo-alt.svg" alt="logo" class="h-48">
                    </div>

                    <div class="w-full justify-center items-center text-center mt-4 dark:text-gray-300">
                        <p>Tag Terbaru</p>
                        <?php foreach ($data["top3Tags"] as $key => $value) {
                            echo "<a href='" . $data['baseUrl'] . "/blogs/search/tag=" . $value["id"] . "' class='text-indigo-700 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-600 inline-flex items-center md:mb-2 
                            lg:mb-0'>" . $value["name"] . "</a>";
                            if ($key < (count($data["top3Tags"]) - 1)) {
                                echo ",";
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="bg-gray-50 dark:text-gray-400 dark:bg-gray-900 body-font">
        <div class="container px-5 py-6 mx-auto">
            <h3 class="py-3 text-lg font-bold">Blog Terbaru</h3>
            <div class="flex flex-wrap -m-4">
                <?php
                foreach ($data["blogLatest"] as $key => $value) {
                ?>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?= $data["baseUrl"] . $value["poster_path"] ?>" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium dark:text-gray-500 uppercase mb-1"><?= $value["tags_id"] ?></h2>
                                <h1 class="title-font text-lg font-medium dark:text-white mb-3"><?= $value["title"] ?></h1>
                                <p class="leading-relaxed mb-3"><?= html_entity_decode($value["summary"]) ?></p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="<?= $data["baseUrl"] ?>/blogs/blog/<?= $value["id"] ?>" class="text-indigo-400 hover:drop-shadow-lg dark:hover:drop-shadow-lg inline-flex dark:hover:text-lg items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="dark:text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800 hover:drop-shadow-lg dark:hover:drop-shadow-lg cursor-pointer dark:hover:text-red-400 hover:text-red-400">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                        </svg><?= ($value["countLike"]) ? $value["countLike"] : "" ?>
                                    </span>
                                    <span class="dark:text-gray-500 inline-flex items-center leading-none text-sm cursor-pointer hover:drop-shadow-lg dark:hover:drop-shadow-lg hover:text-gray-400 dark:hover:text-gray-400">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                        </svg><?= ($value["countBookmark"]) ? $value["countBookmark"] : "" ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </div>
    <div class="sticky bottom-5 ml-7 pb-5">
        <a href="./blogs/create" type="button" class="flex items-center justify-center rounded-full bg-emerald-500 dark:bg-emerald-600 text-white leading-normal uppercase shadow-lg hover:bg-emerald-700 hover:shadow-lg focus:bg-emerald-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-emerald-800 active:shadow-lg transition duration-150 ease-in-out w-44 h-20">
            <div>
                <svg class="w-9 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                </svg>
            </div>
            <p class="ml-2 text-lg">Buat Blog</p>
        </a>
    </div>
</section>