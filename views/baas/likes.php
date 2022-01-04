<div class="w-3/4 p-6">
    <div class="w-full flex justify-start items-center">
        <button id="btn-add-likes" class="w-1/3 text-white p-4 px-6 bg-sky-900 hover:bg-sky-700 focus:bg-sky-600 rounded-lg">
            Add Likes
        </button>
    </div>
    <div class="w-full p-3 mt-3 overflow-x-auto border rounded-lg border-gray-500 snap-x">
        <div class="py-2 inline-block sm:px-6 lg:px-8 snap-start">
            <table>
                <thead>
                    <tr class="bg-gray-800 text-white border-b">
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                id
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                blog_id
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                user_id
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                created_at
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                Action
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            echo "
                                    <td class='p-2'>
                                        <input type='text' class='border p-1'>
                                    </td>
                                ";
                        }
                        ?>
                    </tr>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <?php
                        $i = 1;
                        // foreach ($likeModal->getAllLikes() as $key => $value) {
                        //     echo "
                        //                 <tr class='bg-gray-100 text-center border-b text-sm text-gray-600 min-h-64'>
                        //                     <td class='p-2 border-r'>" . $value['id'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['blog_id'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['user_id'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['created_at'] . "</td>
                        //                     <td class='p-2'>
                        //                         <a href='" . $data["baseUrl"] . "/api/edit/like/" . $value["id"] . "' class='text-white p-2 px-6 bg-sky-900 hover:bg-sky-700 focus:bg-sky-600 rounded-lg'>Edit</a>
                        //                         <a href='" . $data["baseUrl"] . "/api/delete/like/" . $value["id"] . "' class=' text-white p-2 px-6 bg-red-900 hover:bg-red-700 focus:bg-red-600 rounded-lg'>Delete</a>
                        //                     </td>
                        //                 </tr>";
                        //     $i++;
                        // }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id='likes_modal' class='hidden fixed inset-0 z-50 bg-gray-600 bg-opacity-75 flex items-center justify-center p-3'>
    <div class='bg-gray-200 max-w-lg rounded-lg overflow-hidden px-3 lg:px-6 py-4 space-y-4'>

        <h1 class='font-semibold text-gray-700 text-xl'>Likes</h1>
        <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
            <form class="grid grid-flow-row auto-rows-auto gap-2 outline-dashed p-2 rounded" action="./api/input/user" method="POST">
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
        <div class='flex justify-end pt-4 text-gray-700'>
            <button id='btn_close_likes_modal' type='button' class='rounded-lg px-5 py-2 border-2 border-gray-300 focus:border-transparent focus:outline-none hover:bg-gray-600 hover:text-gray-200 focus:bg-gray-700 focus:text-white focus:shadow-outline bg-white font-medium'>
                Tutup
            </button>
        </div>
    </div>
</div>