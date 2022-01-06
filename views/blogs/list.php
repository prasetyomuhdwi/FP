<section class="text-gray-600 dark:text-gray-400 body-font overflow-hidden bg-gray-200 dark:bg-gray-700">
    <div class="container px-5 py-12 mx-auto">
        <div class="divide-y-2 divide-gray-600">

            <?php
            foreach ($data["result"]["blogs"] as $key => $value) {
            ?>
                <div class="py-4 flex flex-warp md:flex-nowarp">
                    <div class="md:w-64 md:mb-0 mb-6 shrink-0 flex flex-col">
                        <span class="font-semibold text-sm text-gray-700 dark:text-gray-500 uppercase"><?= $value["tags_id"] ?></span>
                        <span class="mt-1 text-gray-500 dark:text-gray-200 text-sm"><?= $value["created_at"] ?></span>
                    </div>
                    <div class="md:grow">
                        <h2 class="text-2xl font-medium text-gray-900 dark:text-white capitalize mb-2"><?= $value["title"] ?></h2>
                        <p class="leading-relaxed"><?= $value["summary"] ?></p>
                        <a href="./blogs/blog/1" class="text-indigo-400 inline-flex items-center mt-4">Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- pagination -->
            <?php
            if (5 < count($data["result"]["blogs"])) {
            ?>
                <div class="flex justify-center p-3 mt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="flex list-style-none">
                            <li class="page-item disabled"><a href="./blogs?page=prev" class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none" tabindex="-1" aria-disabled="true">Previous</a></li>
                            <li class="page-item active"><a href="./blogs?page=1" class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md">1</a></li>
                            <li class="page-item"><a href="./blogs?page=2" class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-400 hover:text-gray-50 hover:bg-gray-600 focus:shadow-none">2</a></li>
                            <li class="page-item"><a href="./blogs?page=3" class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-400 hover:text-gray-50 hover:bg-gray-600 focus:shadow-none">3</a></li>
                            <li class="page-item"><a href="./blogs?page=next" class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-400 hover:text-gray-50 hover:bg-gray-600 focus:shadow-none">Next</a></li>
                        </ul>
                    </nav>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>