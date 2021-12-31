<section class="flex">
    <div class="
        flex
        sm:px-6
        px-2
        py-8
        bg-white
        border-r
        dark:bg-gray-800 dark:border-gray-600">
        <div id="menu-baas" class="h-full hidden sm:flex flex-col justify-around">
            <a class="flex items-center justify-left p-3 mb-3 text-gray-700 dark:text-white text-xl font-bold" href=" <?= $data['baseUrl'] ?>/">
                <img class="w-12 " src="<?= $data['baseUrl'] ?>/assets/image/logo.svg" alt="logo">
                ToPlanter
            </a>

            <div class="flex flex-col justify-between flex-1 mt-8">
                <nav class="grid grid-flow-row auto-row-auto gap-2">
                    <a class="flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/baas">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>

                    <a class="
                        flex items-center px-4 py-2 
                        text-gray-700 bg-gray-200 
                        rounded-md dark:bg-gray-700 
                        dark:text-gray-200" href="<?= $data['baseUrl'] ?>/baas/users">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Users</span>
                    </a>

                    <a class="
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/baas/tags">
                        <svg class=" w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Tags</span>
                    </a>

                    <a class="
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/baas/blogs">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>

                        <span class="mx-4 font-medium">Blogs</span>
                    </a>

                    <hr class="my-6 border-gray-300 dark:border-gray-600" />

                    <a class="
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/baas/likes">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>

                        <span class="mx-4 font-medium">Likes</span>
                    </a>

                    <a class="
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/baas/bookmarks">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>

                        <span class="mx-4 font-medium">Bookmarks</span>
                    </a>
                    <a class="
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/baas/comments">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>

                        <span class="mx-4 font-medium">Comments</span>
                    </a>

                    <button id='btn_setting' class="
                    w-full    
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Settings</span>
                    </button>
                    <hr class="my-6 border-gray-300 dark:border-gray-600" />

                    <a class="
                    flex
                    items-center
                    px-4
                    py-2
                    text-gray-600
                    transition-colors
                    duration-200
                    transform
                    rounded-md
                    dark:text-gray-400
                    hover:bg-gray-200
                    dark:hover:bg-gray-700 dark:hover:text-gray-200
                    hover:text-gray-700" href="<?= $data['baseUrl'] ?>/auth/logout">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>

                        <span class="mx-4 font-medium">Logout</span>
                    </a>
                </nav>
            </div>
        </div>
        <div class="relative flex items-center justify-between h-10">
            <div class="absolute inset-y-0 left-0 flex items-center bg-gray-800 rounded-md">
                <!-- Mobile menu button-->
                <button id="toggle-menu" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-white hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="icon-menu hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="icon-menu h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <div class='w-full bg-gray-600 bg-opacity-75 flex items-center justify-center p-3'>
        <div class='bg-gray-200 max-w-lg rounded-lg px-3 lg:px-6 py-4 space-y-4'>
            <?php
            switch ($data["table"]) {
                case "user":
            ?>
                    <h1 class='font-semibold text-gray-700 text-xl'>Users</h1>
                    <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                        <form class="grid grid-flow-row auto-rows-auto gap-2 outline-dashed p-2 rounded" action="<?= $data["baseUrl"] ?>/api/update/user" method="POST">
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <input type="text" name="username" placeholder="Username" value="<?= $data["user"]["username"] ?>" class="shadow text-gray-800 focus:text-gray-800 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <input type="text" name="fullname" placeholder="Fullname" value="<?= $data["user"]["fullname"] ?>" class="shadow text-gray-800 focus:text-gray-800 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <input type="email" name="email" placeholder="Email" value="<?= $data["user"]["email"] ?>" class="shadow text-gray-800 focus:text-gray-800 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <input type="password" name="password" placeholder="Password" class="shadow text-gray-800 focus:text-gray-800 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <textarea name="bio" placeholder="Biografi User" cols="30" rows="3" class="snap-start shadow text-gray-800 focus:text-gray-800 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                             <?= $data["user"]["bio"] ?>
                        </textarea>
                            </div>
                            <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-200 hover:text-gray-300 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                                Submit
                            </button>
                        </form>
                    </div>

                    <?php
                    break;
                    ?>

                <?php
                case "tag":
                ?>
                    <h1 class='font-semibold text-gray-700 text-xl'>Tags</h1>
                    <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                        <form class="grid grid-flow-row auto-rows-auto gap-2 outline-dashed p-2 rounded" action="<?= $data["baseUrl"] ?>/api/update/tag" method="POST">
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <input type="text" name="name" placeholder="Nama Tag" class="shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                                Submit
                            </button>
                        </form>
                    </div>

                    <?php
                    break;
                    ?>

                <?php
                case "blog":
                ?>
                    <h1 class='font-semibold text-gray-700 text-xl'>Blogs</h1>
                    <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                        <form class="grid grid-flow-col auto-cols-auto gap-4 outline-dashed p-2 rounded" action="<?= $data["baseUrl"] ?>/api/update/blog" method="POST" enctype="multipart/form-data">
                            <div class="grid auto-rows-auto gap-2">
                                <div class="relative rounded-md shadow-sm bg-gray-400">
                                    <div class="xl:w-96">
                                        <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="user_id" aria-label="Select User" required>
                                            <?php
                                            // foreach ($users->getListUsers() as $key => $value) {
                                            //     echo "<option value='" . $value['id'] . "'>" . $value['username'] . "</option>";
                                            // }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="relative rounded-md shadow-sm bg-gray-400">
                                    <div class="xl:w-96">
                                        <select class="
                                                h-full 
                                                form-multiselect 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="tags_id[]" data-bs-toggle="tooltip" data-bs-placement="right" title="<b>MultiSelect</b><br> Tahan ctrl atau shift + klik" aria-label="Select Tags" multiple="multiple" required>
                                            <?php
                                            // foreach ($tags->getListTags() as $key => $value) {
                                            //     echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
                                            // }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="relative rounded-md shadow-sm bg-gray-400">
                                    <input type="text" name="title" placeholder="Title" class="h-full shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                                </div>
                            </div>
                            <div class="grid auto-rows-auto gap-2">
                                <div class="relative rounded-md shadow-sm bg-gray-400">
                                    <textarea name="summary" placeholder="Deskripsi singkat" cols="30" rows="4" class="h-full shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required></textarea>
                                </div>
                                <div class="relative rounded-md shadow-sm bg-gray-400">
                                    <textarea name="content" placeholder="Content" cols="30" rows="4" class="h-full shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required></textarea>
                                </div>
                                <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>

                    <?php
                    break;
                    ?>

                <?php
                case "comment":
                ?>

                    <h1 class='font-semibold text-gray-700 text-xl'>Comments</h1>
                    <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                        <form class="grid grid-flow-row auto-rows-auto gap-2 outline-dashed p-2 rounded" action="<?= $data["baseUrl"] ?>/api/update/comment" method="POST">

                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <div class="xl:w-96">
                                    <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="blog_id" aria-label="Select Blog" required>
                                        <?php
                                        // foreach ($blogs->getListBlogs() as $key => $value) {
                                        //     echo "<option value='" . $value['id'] . "'>" . $value['title'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <div class="xl:w-96">
                                    <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="user_id" aria-label="Select User" required>
                                        <?php
                                        // foreach ($users->getListUsers() as $key => $value) {
                                        //     echo "<option value='" . $value['id'] . "'>" . $value['username'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <textarea name="comment" placeholder="Comment" cols="30" rows="3" class="shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required></textarea>
                            </div>
                            <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                                Submit
                            </button>
                        </form>
                    </div>

                    <?php
                    break;
                    ?>

                <?php
                case "like":
                ?>
                    <h1 class='font-semibold text-gray-700 text-xl'>Likes</h1>
                    <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                        <form class="grid grid-flow-row auto-rows-auto gap-2 outline-dashed p-2 rounded" action="<?= $data["baseUrl"] ?>/api/update/like" method="POST">
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <div class="xl:w-96">
                                    <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="blog_id" aria-label="Select Blog" required>
                                        <?php
                                        // foreach ($blogs->getListBlogs() as $key => $value) {
                                        //     echo "<option value='" . $value['id'] . "'>" . $value['title'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <div class="xl:w-96">
                                    <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="user_id" aria-label="Select User" required>
                                        <?php
                                        // foreach ($users->getListUsers() as $key => $value) {
                                        //     echo "<option value='" . $value['id'] . "'>" . $value['username'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                                Submit
                            </button>
                        </form>
                    </div>

                    <?php
                    break;
                    ?>

                <?php
                case "bookmark":
                ?>
                    <h1 class='font-semibold text-gray-700 text-xl'>Bookmarks</h1>
                    <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                        <form class="grid grid-flow-row auto-rows-auto gap-2 outline-dashed p-2 rounded" action="./api/input/bookmark" method="POST">
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <div class="xl:w-96">
                                    <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="blog_id" aria-label="Select Blog" required>
                                        <?php
                                        // foreach ($blogs->getListBlogs() as $key => $value) {
                                        //     echo "<option value='" . $value['id'] . "'>" . $value['title'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="relative rounded-md shadow-sm bg-gray-400">
                                <div class="xl:w-96">
                                    <select class="
                                                h-full 
                                                form-select 
                                                appearance-none
                                                block
                                                w-full
                                                p-3
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding bg-no-repeat
                                                border border-solid border-gray-300
                                                rounded-md
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 
                                                focus:bg-white 
                                                focus:border-blue-600 
                                                focus:outline-none" name="user_id" aria-label="Select User" required>
                                        <?php
                                        // foreach ($users->getListUsers() as $key => $value) {
                                        //     echo "<option value='" . $value['id'] . "'>" . $value['username'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                                Submit
                            </button>
                        </form>
                    </div>
                    <?php
                    break;
                    ?>
            <?php
            }
            ?>
        </div>
    </div>

</section>