	<!--Container-->
	<div class="dark:bg-gray-900 pb-3 min-h-screen">
		<div class="container w-full md:max-w-3xl mx-auto pt-20 pb-20">

			<div class="w-full px-4 md:px-6 text-xl text-gray-800 dark:text-gray-300 leading-normal" style="font-family:Georgia,serif;">

				<!--Title-->
				<div class="font-sans">
					<h1 class="font-bold font-sans break-normal text-gray-900 dark:text-gray-200 pt-6 pb-2 text-3xl md:text-4xl"><?= $data["blog"]["title"] ?></h1>
					<p class="text-sm md:text-base font-normal text-gray-600 dark:text-gray-400"><?= date('F jS Y \a\t g:ia', strtotime($data["blog"]["created_at"])); ?></p>
				</div>


				<!--Post Content-->


				<?= html_entity_decode($data["blog"]["content"]); ?>

				<!--/ Post Content-->

			</div>

			<!--Tags -->
			<div class="text-base md:text-sm text-gray-500 dark:text-gray-300 px-4 py-6">
				Tags: <?php for ($i = 0; $i < count($data["blog"]["tags_id"]); $i++) { ?><a href="<?= $data["baseUrl"] ?>/blogs/search/tag=<?= $data["blog"]["tags_id"][$i] ?>" class="text-base md:text-sm text-green-500 no-underline hover:underline"><?= $data["blog"]["tags_name"][$i] ?></a><?= ($i < (count($data["blog"]["tags_id"]) - 1)) ? "." : "" ?><?php } ?>
			</div>

			<!--Divider-->
			<hr class="border-b-2 border-gray-400 mx-4">

			<!--Author-->
			<div class="flex w-full items-center font-sans px-4 py-12">
				<img class="w-10 h-10 rounded-full mr-4" src="<?= ($data["author"]["avatar_path"]) ? $data["baseUrl"] . $data["author"]["avatar_path"] : $data["baseUrl"] . "/assets/image/default-user.jpeg'" ?>" alt="Avatar of Author">
				<div class="flex-1 px-2">
					<p class="text-base font-bold dark:text-white text-base md:text-xl leading-none mb-2"><?= $data["author"]["fullname"] ?></p>
					<p class="text-gray-600 dark:text-gray-300 text-xs md:text-base"><?= $data["author"]["bio"] ?></p>
				</div>
				<div class="justify-end ">
					<a href="<?= $data["baseUrl"] ?>/accounts/profile/<?= $data["author"]["username"] ?>" class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 dark:text-gray-300 hover:text-green-500 font-bold py-2 px-4 rounded-full"><?= $data["author"]["username"] ?></a>
				</div>
			</div>
			<!--/Author-->

			<!--Divider-->
			<hr class="border-b-2 border-gray-400 mb-8 mx-4">

			<!--Comment-->
			<div class="antialiased mx-auto max-w-screen-sm p-4 dark:text-white rounded-lg dark:bg-gray-800">
				<h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Komentar</h3>
				<div class="flex w-full rounded-lg bg-gray-300 dark:bg-gray-700 items-center justify-center shadow-lg mt-2 mb-4">
					<form class="w-full px-4 pt-2" method="post" action="<?= $data["baseUrl"] ?>/api/insert/comment/b=<?= $data["blog"]["id"] ?>">
						<div class="flex flex-wrap -mx-3 mb-6">
							<h2 class="px-4 pt-3 pb-2 text-gray-800 dark:text-gray-100 text-lg">Komentar</h2>
							<div class="w-full md:w-full px-3 mb-2 mt-2">
								<textarea name="comment" class="bg-gray-100 dark:bg-gray-700 rounded border border-gray-400 text-gray-800 dark:text-gray-100 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 dark:placeholder-gray-100 focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-700" name="body" placeholder='Type Your Comment' required></textarea>
							</div>
							<div class="w-full md:w-full flex items-start md:w-full px-3">
								<div class="-mr-1">
									<input type='submit' class="bg-white text-gray-700 dark:bg-gray-700 dark:text-gray-50 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 dark:hover:shadow-lg cursor-pointer dark:hover:bg-gray-500" value='Post Comment'>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="space-y-4">
					<?php
					foreach ($data["comments"] as $key => $value) {
						if ($value["parent_id"] == 0) {
					?>
							<div class="flex">
								<div class="flex-shrink-0 mr-3">
									<img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="<?= $data["baseUrl"] . $value["avatar_path"] ?>" alt="">
								</div>
								<div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
									<strong><?= $value['username'] ?></strong>
									<p class="text-sm mb-2">
										<?= $value['comment'] ?>
									</p>

									<button onclick="reply([<?= $value['id'] ?>,'<?= $data['baseUrl'] . '/api/insert/comment/b=' . $data['blog']['id'] . ',p=' . $value['id'] ?>'],this)" class="btn-toggle-comment my-5 uppercase tracking-wide text-gray-400 dark:text-white font-bold text-xs">Balas</button>

									<div class="space-y-4 p-4 rounded-lg dark:bg-gray-700">
										<?php
										foreach ($data["comments"] as $x => $result) {
										?>

											<?php
											if ($result["parent_id"] == $value["id"]) {
											?>
												<div class="flex">
													<div class="flex-shrink-0 mr-3">
														<img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="<?= $data["baseUrl"] . $result["avatar_path"] ?>" alt="<?= $result["username"] ?>">
													</div>
													<div class="flex-1 border border-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
														<strong><?= $result["username"] ?></strong>
														<p class="text-xs sm:text-sm">
															<?= $result["comment"] ?> </p>
													</div>
												</div>
											<?php
											}
											?>

										<?php
										} ?>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>


	<!--/Comment-->

	</div>
	</div>
	<!--/container-->