<section class="bg-gray-50 dark:text-gray-400 dark:bg-gray-900 body-font py-5">
    <div class="bg-green-300 dark:bg-gray-900">


        <div class="flex justify-center items.center p-5 py-10 min-h-screen">

            <form action="<?= ($data["blog"]) ? $data["baseUrl"] . "/api/update/blog/" . $data["blog"]["id"] : $data["baseUrl"] . "/api/insert/blog" ?>" method="POST" class="w-3/4 bg-gray-100 dark:bg-gray-700 flex rounded-lg shadow-lg dark:text-white" enctype="multipart/form-data">
                <div class="w-1/3 p-3">
                    <div class="flex flex-col gap-2 p-2">
                        <label for="toggle" class="">Publis Blog?</label>
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="status" value="<?= ($data["blog"]["status"] == "publish") ? "on" : "off" ?>" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white dark:bg-white border-4 appearance-none cursor-pointer" />
                            <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"></label>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <label for="poster_path" class="ml-2">Gambar*</label>
                        <input required type="file" id="poster_path" name="poster_path" class="dark:bg-gray-700 dark:focus:text-white dark:text-white block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <label for="title" class="ml-2">Judul*</label>
                        <input required type="text" value="<?= ($data["blog"]["title"]) ? $data["blog"]["title"] : "" ?>" id="title" name="title" placeholder="Judul" class="dark:bg-gray-700 dark:focus:text-white dark:text-white block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <label for="tags_id" class="ml-2">Kategori Blog*</label>
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
                                focus:outline-none" name="tags_id[]" id="tags_id" data-bs-toggle="tooltip" data-bs-placement="right" title="**MultiSelect** Tahan ctrl atau shift + klik" aria-label="Select Tags" multiple="multiple" required>

                            <?php
                            foreach ($data["getListTags"] as $key => $value) {
                                echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <button type="submit" class="w-full px-4 p-2 mt-2 relative rounded-md shadow-lg bg-gray-700 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:bg-gray-900 text-gray-400 hover:text-gray-200 hover:bg-gray-800 focus:text-white focus:bg-gray-900">
                            Simpan
                        </button>
                    </div>
                </div>
                <div class="w-full p-3">
                    <div class="bg-yellow-100 rounded-lg py-3 px-6 mb-3 text-base text-yellow-700 inline-flex text-sm items-center w-full" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path>
                        </svg>
                        Jika Publis belum dicentang maka blog belum dapat diakses publik
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <label for="summary" class="ml-2">Ringkasan Tanaman*</label>
                        <textarea name="summary" id="summary" cols="10" rows="3" placeholder="Ringkasan tanaman" class="w-full rounded-lg dark:bg-gray-700 dark:text-white block text-sm py-3 px-4 rounded-lg w-full border outline-none"><?= ($data["blog"]["summary"]) ? $data["blog"]["summary"] : "" ?></textarea>
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <label for="content" class="ml-2">Isi Blog*</label>
                        <textarea name="content" id="content" cols="20" rows="15" placeholder="Isi Blog" class="w-full rounded-lg dark:bg-gray-700 dark:text-white block text-sm py-3 px-4 rounded-lg w-full border outline-none"><?= ($data["blog"]["content"]) ? $data["blog"]["content"] : "" ?></textarea>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>