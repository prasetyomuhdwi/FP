<div class="w-3/4 p-6">
    <div class="w-full flex justify-start items-center">
        <button id="btn-add-blogs" class="w-1/3 text-white p-4 px-6 bg-sky-900 hover:bg-sky-700 focus:bg-sky-600 rounded-lg">
            Add Blogs
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
                                tags_id
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
                                title
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                content
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                summary
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">
                                poster_path
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
                                updated_at
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
                        for ($i = 0; $i < 10; $i++) {
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
                        // foreach ($blogModal->getAllBlogs(true) as $key => $value) {
                        //     if (empty($value['deleted_at'])) {
                        //         echo "
                        //                 <tr class='bg-gray-100 text-center border-b text-sm text-gray-600 min-h-64'>
                        //                     <td class='p-2 border-r'>" . $value['id'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['tags_id'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['user_id'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['title'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['content'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['summary'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['poster_path'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['created_at'] . "</td>
                        //                     <td class='p-2 border-r'>" . $value['updated_at'] . "</td>
                        //                     <td class='p-2'>
                        //                         <a href='" . $data["baseUrl"] . "/api/edit/blog/" . $value["id"] . "' class='text-white p-2 px-6 bg-sky-900 hover:bg-sky-700 focus:bg-sky-600 rounded-lg'>Edit</a>
                        //                         <a href='" . $data["baseUrl"] . "/api/delete/blog/" . $value["id"] . "' class=' text-white p-2 px-6 bg-red-900 hover:bg-red-700 focus:bg-red-600 rounded-lg'>Delete</a>
                        //                     </td>
                        //                 </tr>";
                        //         $i++;
                        //     }
                        // }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id='blogs_modal' class='hidden fixed inset-0 z-50 bg-gray-600 bg-opacity-75 flex items-center justify-center p-3'>
    <div class='bg-gray-200 rounded-lg overflow-hidden px-3 lg:px-6 py-4 space-y-4'>

        <h1 class='font-semibold text-gray-700 text-xl'>Users</h1>
        <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
            <form class="flex gap-4 outline-dashed p-2 rounded" action="./api/input/user" method="POST">
                <div class="flex flex-col gap-2">
                    <div class="relative rounded-md shadow-sm bg-gray-100">
                        <div class="xl:w-96 p-2">
                            <label class="text-gray-700 text-left flex ml-2" for="user_id">Id User</label>
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
                                                focus:outline-none" name="user_id" id="user_id" aria-label="Select User" required>
                                <option value=''>test</option>
                                <option value=''>test</option>
                                <?php
                                // foreach ($users->getListUsers() as $key => $value) {
                                //     echo "<option value='" . $value['id'] . "'>" . $value['username'] . "</option>";
                                // }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="relative rounded-md shadow-sm bg-gray-100">
                        <div class="xl:w-96 p-2">
                            <label class="text-gray-700 text-left flex ml-2" for="tags_id">Id Tags</label>
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
                                                focus:outline-none" name="tags_id[]" id="tags_id" data-bs-toggle="tooltip" data-bs-placement="right" title="<b>MultiSelect</b><br> Tahan ctrl atau shift + klik" aria-label="Select Tags" multiple="multiple" required>
                                <option value=''>test</option>
                                <option value=''>test</option>

                                <?php
                                // foreach ($tags->getListTags() as $key => $value) {
                                //     echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
                                // }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="relative rounded-md shadow-sm bg-gray-100">
                        <div class="xl:w-96 p-2">
                            <label class="text-gray-700 text-left flex ml-2" for="title">Judul</label>
                            <input type="text" name="title" id="title" placeholder="Title" class="h-full shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                    </div>
                </div>
                <div class="grid auto-rows-auto gap-2">
                    <div class="relative rounded-md shadow-sm bg-gray-100">
                        <textarea name="summary" placeholder="Deskripsi singkat" cols="30" rows="4" class="h-full shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="relative rounded-md shadow-sm bg-gray-100">
                        <textarea name="content" placeholder="Content" cols="30" rows="4" class="h-full shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 py-3 pr-12 sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <button class="w-full px-4 p-2 mt-2 relative rounded-md shadow-sm bg-gray-700 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class='flex justify-end pt-4 text-gray-700'>
            <button id='btn_close_blogs_modal' type='button' class='rounded-lg px-5 py-2 border-2 border-gray-300 focus:border-transparent focus:outline-none hover:bg-gray-600 hover:text-gray-200 focus:bg-gray-700 focus:text-white focus:shadow-outline bg-white font-medium'>
                Tutup
            </button>
        </div>
    </div>
</div>