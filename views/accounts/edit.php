<section>
    <main class="bg-gray-200 dark:bg-gray-700 h-full py-8">
        <div class="max-w-6xl mx-auto px-4 pt-4 lg:pt-6">
            <div class="flex flex-warp gap-3">

                <form class="w-96 h-96 bg-gray-600 rounded-lg shadow-lg shrink-0 p-5">
                    <p class="text-xl font-semibold text-gray-500">Ubah Avatar</p>
                    <div class="flex flex-col p-5 justify-center items-center">
                        <img alt="profil" src="https://www.tailwind-kit.com/images/person/1.jpg" class="object-cover rounded-full h-36 w-36 " />
                        <div class='form-group mb-2'>
                            <div class='flex justify-center'>
                                <div class="py-3">
                                    <input class='form-control
                                                block
                                                px-3 py-1.5
                                                text-base font-normal
                                                text-gray-50
                                                bg-gray-600 bg-clip-padding
                                                border border-solid
                                                rounded shadow-lg
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-white focus:bg-gray-700 
                                                focus:border-white focus:outline-none' type='file' name='avatar_path'>
                                </div>
                            </div>
                        </div>
                        <button class="bg-gray-500 hover:bg-gray-400 focus:bg-gray-700 text-white shadow w-full p-3 rounded-lg" type="submit">Terapkan</button>
                    </div>
                </form>

                <div class="grow">
                    <form class="bg-gray-600 rounded-lg shadow-lg flex flex-col justify-around p-5">
                        <p class="text-xl font-semibold text-gray-500">Ubah Personal</p>
                        <div class="flex flex-col py-2">
                            <label for="username" class="text-sm text-left 
                                 font-bold text-gray-300">Username : </label>
                            <input type="text" id="username" name="username" placeholder="username" class="py-2 border-b-2 rounded border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder:pl-3 placeholder-gray-400 outline-none bg-gray-700">
                        </div>
                        <div class="flex flex-col py-2">
                            <label for="fullname" class="text-sm text-left 
                                 font-bold text-gray-300">Fullname : </label>
                            <input type="text" id="fullname" name="fullname" placeholder="fullname" class="py-2 border-b-2 rounded border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder:pl-3 placeholder-gray-400 outline-none bg-gray-700">
                        </div>
                        <div class="flex flex-col py-2">
                            <label for="email" class="text-sm text-left 
                                 font-bold text-gray-300">Email : </label>
                            <input type="email" id="email" name="email" placeholder="email" class="py-2 border-b-2 rounded border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder:pl-3 placeholder-gray-400 outline-none bg-gray-700">
                        </div>
                        <div class="flex flex-col py-2">
                            <label for="bio" class="text-sm text-left 
                                 font-bold text-gray-300">Bio : </label>
                            <textarea name="bio" id="bio" cols="30" rows="3" class="py-2 border-b-2 rounded border-gray-400 focus:border-green-400 
                                text-gray-600 placeholder:pl-3 placeholder-gray-400 outline-none bg-gray-700">

                            </textarea>
                        </div>
                        <div class="flex flex-col py-2">
                            <button class="bg-emerald-600 hover:bg-emerald-700 focus:bg-emerald-800 text-white shadow w-full p-3 rounded-lg" type="submit">Kirim</button>
                        </div>
                    </form>

                    <form class="bg-gray-600 rounded-lg shadow-lg flex flex-col justify-around p-5 mt-4">
                        <p class="text-xl font-semibold text-gray-500">Ubah Kata Sandi</p>
                        <div class="flex flex-col py-2">
                            <label for="password" class="text-sm text-left 
                                 font-bold text-gray-300">Kata Sandi : </label>
                            <input type="password" id="password" name="password" placeholder="kata sandi" class="py-2 border-b-2 rounded border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder:pl-3 placeholder-gray-400 outline-none bg-gray-700">
                        </div>
                        <div class="flex flex-col py-2">
                            <label for="re-password" class="text-sm text-left 
                                 font-bold text-gray-300">Konfirmasi Kata Sandi : </label>
                            <input type="password" id="re-password" placeholder="konfirmasi kata sandi" class="py-2 border-b-2 rounded border-gray-400 focus:border-green-400 
                            text-gray-600 placeholder:pl-3 placeholder-gray-400 outline-none bg-gray-700">
                        </div>
                        <div class="flex flex-col py-2">
                            <button class="bg-gray-500 hover:bg-gray-400 focus:bg-gray-700 text-white shadow w-full p-3 rounded-lg" type="submit">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>