<div class="py-3 pl-8 sm:p-5 text-white w-full grid auto-row-auto gap-1">
    <div class="grid grid-cols-4 col-auto gap-2 mb-4">
        <div class="p-4 shadow-lg bg-gray-800 rounded-md grid items-center">
            <div class="flex flex-col justify-around items-center w-full p-2 rounded-lg">
                <h2 class="text-5xl font-medium text-gray-50"><?= $data['count']['user'] ?></h2>
                <p class="text-gray-300 text-xl">Users</p>
            </div>
        </div>
        <div class="p-4 shadow-lg bg-gray-800 rounded-md grid items-center">
            <div class="flex flex-col justify-around items-center w-full p-2 rounded-lg">
                <h2 class="text-5xl font-medium text-gray-50"><?= $data['count']['blog'] ?></h2>
                <p class="text-gray-300 text-xl">Blogs</p>
            </div>
        </div>
        <div class="p-4 shadow-lg bg-gray-800 rounded-md grid items-center">
            <div class="flex flex-col justify-around items-center w-full p-2 rounded-lg">
                <h2 class="text-5xl font-medium text-gray-50"><?= $data['count']['tag'] ?></h2>
                <p class="text-gray-300 text-xl">Tags</p>
            </div>
        </div>
        <div class="p-4 shadow-lg bg-gray-800 rounded-md grid items-center">
            <div class="flex flex-col justify-around items-center w-full p-2 rounded-lg">
                <h2 class="text-5xl font-medium text-gray-50"><?= $data['count']['like'] ?></h2>
                <p class="text-gray-300 text-xl">Likes</p>
            </div>
        </div>
        <div class="p-4 shadow-lg bg-gray-800 rounded-md grid items-center">
            <div class="flex flex-col justify-around items-center w-full p-2 rounded-lg">
                <h2 class="text-5xl font-medium text-gray-50"><?= $data['count']['bookmark'] ?></h2>
                <p class="text-gray-300 text-xl">Bookmarks</p>
            </div>
        </div>
        <div class="p-4 shadow-lg bg-gray-800 rounded-md grid items-center">
            <div class="flex flex-col justify-around items-center w-full p-2 rounded-lg">
                <h2 class="text-5xl font-medium text-gray-50"><?= $data['count']['comment'] ?></h2>
                <p class="text-gray-300 text-xl">Comments</p>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col mt-2">
        <h2 class="text-gray-700 font-bold text-xl">Top 5 Blogs Favorite</h2>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-red-900 text-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Blog Id
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Title
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    User Id
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Tags Id
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Mark
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Otto
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @mdo
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Jacob
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Thornton
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @fat
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Larry
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Wild
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @twitter
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col mt-2">
        <h2 class="text-gray-700 font-bold text-xl">Top 5 Blogs Popular</h2>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-sky-900 text-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Blog Id
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Title
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    User Id
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Tags Id
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Mark
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Otto
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @mdo
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Jacob
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Thornton
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @fat
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Larry
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Wild
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @twitter
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col mt-2">
        <h2 class="text-gray-700 font-bold text-xl">Top 5 Blogs Latest</h2>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-emerald-900 text-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Blog Id
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Title
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    User Id
                                </th>
                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                    Tags Id
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Mark
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Otto
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @mdo
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Jacob
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Thornton
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @fat
                                </td>
                            </tr>
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Larry
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Wild
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @twitter
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>