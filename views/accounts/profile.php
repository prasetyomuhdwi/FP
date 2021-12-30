<section>
    <main class="bg-gray-200 dark:bg-gray-700 h-full py-8">
        <div class="max-w-6xl mx-auto px-4 pt-4 lg:pt-6">
            <div class="flex justify-between dark:text-white">

                <div class="w-full mx-auto rounded-lg bg-white dark:bg-gray-800 shadow-lg px-5 py-4 text-gray-800 dark:text-gray-50">

                    <div>
                        <div class="flex">
                            <div class="w-64 flex flex-col items-center pt-1 text-left shrink-0">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="https://www.tailwind-kit.com/images/person/1.jpg" class="object-cover rounded-full h-36 w-36 " />
                                </a>
                                <div class="py-4 text-center">
                                    <p class="text-gray-800 dark:text-white text-xl font-semibold">
                                        username
                                    </p>
                                    <p class="text-gray-800 dark:text-white text-lg">
                                        Full Name
                                    </p>
                                </div>
                            </div>
                            <div class="grow">
                                <div class="flex flex-col justify-center">
                                    <p class="px-4 pt-4 text-gray-800 dark:text-white text-lg font-medium">
                                        Biografi Singkat
                                    </p>
                                    <p class="px-4 pt-2 text-gray-800 dark:text-white text-sm font-medium">
                                        Biografi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur eligendi ab unde sed aliquid excepturi voluptatum eos ullam architecto beatae saepe odio blanditiis rerum obcaecati, veritatis animi nam, nisi sunt.
                                    </p>
                                </div>
                                <div class="w-full">
                                    <p class="px-4 pt-4 text-gray-800 dark:text-white text-lg font-medium">
                                        Email
                                    </p>
                                    <p class="px-4 pt-2 text-gray-800 dark:text-white text-sm font-medium">
                                        username@mail.com
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-2 p-4">
                            <a href="<?= $data["baseUrl"] ?>/accounts/edit" type="button" class="w-64 py-2 px-4 bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Edit Profile
                            </a>
                            <a href="<?= $data["baseUrl"] ?>/blogs/create" type="button" class="w-64 py-2 px-4 bg-emerald-600 hover:bg-emerald-700 focus:ring-emerald-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Tambah blog
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-700 my-3">
                    <div class="flex justify-between items-center">
                        <button class="w-full py-2 border-b-2 border-emerald-700 focus:border-emerald-700 hover:border-emerald-500">
                            <svg class="mx-auto h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </button>
                        <button class="w-full py-2 hover:border-b-2 focus:border-emerald-700 hover:border-emerald-500">
                            <svg class="mx-auto h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Cards Lists -->
                    <div class="w-full mt-4 grid grid-cols-4 gap-2 hidden">

                        <div class="w-64 bg-gray-700 rounded-lg my-2 p-3 shadow-lg">
                            <img src="https://dummyimage.com/720x400" alt="poster">
                            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="text-xs">1 Jan 2021</p>
                            <div class="mt-4 flex">
                                <span class="flex items-center text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                                <span class="flex items-center ml-2 text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                            </div>
                        </div>
                        <div class="w-64 bg-gray-700 rounded-lg my-2 p-3 shadow-lg">
                            <img src="https://dummyimage.com/720x400" alt="poster">
                            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="text-xs">1 Jan 2021</p>
                            <div class="mt-4 flex">
                                <span class="flex items-center text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                                <span class="flex items-center ml-2 text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                            </div>
                        </div>
                        <div class="w-64 bg-gray-700 rounded-lg my-2 p-3 shadow-lg">
                            <img src="https://dummyimage.com/720x400" alt="poster">
                            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="text-xs">1 Jan 2021</p>
                            <div class="mt-4 flex">
                                <span class="flex items-center text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                                <span class="flex items-center ml-2 text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                            </div>
                        </div>
                        <div class="w-64 bg-gray-700 rounded-lg my-2 p-3 shadow-lg">
                            <img src="https://dummyimage.com/720x400" alt="poster">
                            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="text-xs">1 Jan 2021</p>
                            <div class="mt-4 flex">
                                <span class="flex items-center text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                                <span class="flex items-center ml-2 text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                            </div>
                        </div>
                        <div class="w-64 bg-gray-700 rounded-lg my-2 p-3 shadow-lg">
                            <img src="https://dummyimage.com/720x400" alt="poster">
                            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="text-xs">1 Jan 2021</p>
                            <div class="mt-4 flex">
                                <span class="flex items-center text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                                <span class="flex items-center ml-2 text-xs px-2 shadow-lg inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded-full">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                    <span class="p-2">12</span>
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- List -->
                    <div class="w-full mt-4">

                        <div class="p-4 px-6 flex flex-warp md:flex-nowarp">
                            <div class="md:w-64 md:mb-0 mb-6 shrink-0 flex flex-col">
                                <span class="font-semibold text-gray-700 dark:text-gray-500 uppercase">tag name</span>
                                <span class="mt-1 text-gray-500 dark:text-gray-200 text-sm">12 Jun 2019</span>
                            </div>
                            <div class="md:grow">
                                <h2 class="text-2xl font-medium text-gray-900 dark:text-white capitalize mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                <a href="<?= $data["baseUrl"] ?>/blogs/blog/1" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-4 px-6 flex flex-warp md:flex-nowarp">
                            <div class="md:w-64 md:mb-0 mb-6 shrink-0 flex flex-col">
                                <span class="font-semibold text-gray-700 dark:text-gray-500 uppercase">tag name</span>
                                <span class="mt-1 text-gray-500 dark:text-gray-200 text-sm">12 Jun 2019</span>
                            </div>
                            <div class="md:grow">
                                <h2 class="text-2xl font-medium text-gray-900 dark:text-white capitalize mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                <a href="<?= $data["baseUrl"] ?>/blogs/blog/1" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-4 px-6 flex flex-warp md:flex-nowarp">
                            <div class="md:w-64 md:mb-0 mb-6 shrink-0 flex flex-col">
                                <span class="font-semibold text-gray-700 dark:text-gray-500 uppercase">tag name</span>
                                <span class="mt-1 text-gray-500 dark:text-gray-200 text-sm">12 Jun 2019</span>
                            </div>
                            <div class="md:grow">
                                <h2 class="text-2xl font-medium text-gray-900 dark:text-white capitalize mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                <a href="<?= $data["baseUrl"] ?>/blogs/blog/1" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </main>
</section>