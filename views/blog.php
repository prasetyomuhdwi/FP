<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Blog</title>
	<meta name="author" content="name" />
	<meta name="description" content="description here" />
	<meta name="keywords" content="keywords,here" />

	<link rel="icon" href="./assets/image/logo.svg">
	<link rel="stylesheet" href="./assets/css/tailwindcss.css">

</head>


<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	<nav id="header" class="fixed w-full z-10 top-0 bg-white dark:bg-gray-800 shadow-lg transition duration-300">

		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

		<div class="max-w-6xl mx-auto px-4">
			<div class="flex justify-between">
				<div class="flex space-x-7">
					<div>
						<!-- Website Logo -->
						<a href="./" class="flex items-end py-4 px-2">
							<img src="./assets/image/logo.svg" alt="Logo" class="h-8 w-8 mr-2 transition duration-300">
							<span class="font-semibold text-gray-500 dark:text-gray-50 text-lg">ToPlanter</span>
						</a>
					</div>
					<!-- Primary Navbar items -->
					<div class="hidden md:flex items-center space-x-1">
						<a href="./" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
						<a href="./latest" class="py-4 px-2 text-gray-500 dark:text-gray-50 font-semibold hover:text-green-500 transition duration-300">Latest</a>
						<a href="./about" class="py-4 px-2 text-gray-500 dark:text-gray-50 font-semibold hover:text-green-500 transition duration-300">About Us</a>
					</div>
				</div>
				<!-- Secondary Navbar items -->
				<div class="hidden md:flex items-center space-x-3 ">

					<?php echo $accountComp; ?>

					<!-- Not toggled switch -->
					<div class="w-full h-full flex flex-col justify-center items-center">
						<div class="flex justify-center items-center">
							<span class="">
								<svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
								</svg>
							</span>

							<!-- Switch Container -->
							<button id="btn_darkmode" class="w-14 h-7 flex items-center bg-gray-300 rounded-full mx-3 px-1 transition duration-300">
								<!-- Switch -->
								<div id="item_darkmode" class="bg-white w-5 h-5 rounded-full shadow-md transform transition duration-300"></div>
							</button>

							<span class="">
								<svg class="h-6 w-6 text-gray-400 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
								</svg>
							</span>
						</div>
					</div>

				</div>
				<!-- Mobile menu button -->
				<div class="md:hidden flex items-center">
					<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 dark:text-gray-50 hover:text-green-500 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
			</div>
		</div>
		<!-- mobile menu -->
		<div class="hidden mobile-menu">
			<ul class="">
				<li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
				<li><a href="./latest" class="block text-sm px-2 py-4 dark:text-white hover:bg-green-500 transition duration-300">Latest</a></li>
				<li><a href="./about" class="block text-sm px-2 py-4 dark:text-white hover:bg-green-500 transition duration-300">About Us</a></li>
			</ul>
		</div>
	</nav>


	<!--Container-->
	<div class="dark:bg-gray-900">
		<div class="container w-full md:max-w-3xl mx-auto pt-20">

			<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

				<!--Title-->
				<div class="font-sans">
					<p class="text-base md:text-sm text-green-500 dark:text-green-300 font-bold">&lt; <a href="#" class="text-base md:text-sm text-green-500 dark:text-green-300 font-bold no-underline hover:underline">BACK TO BLOG</a></p>
					<h1 class="font-bold font-sans break-normal text-gray-900 dark:text-gray-200 pt-6 pb-2 text-3xl md:text-4xl">Welcome to Minimal Blog</h1>
					<p class="text-sm md:text-base font-normal text-gray-600 dark:text-gray-400">Published 19 February 2019</p>
				</div>


				<!--Post Content-->


				<!--Lead Para-->
				<p class="py-6 dark:text-gray-300">
					👋 Welcome fellow <a class="text-green-500  no-underline hover:underline" href="https://www.tailwindcss.com">Tailwind CSS</a> and miminal monochrome blog fan. This starter template provides a starting point to create your own minimal monochrome blog using Tailwind CSS and vanilla Javascript.
				</p>

				<p class="py-6 dark:text-gray-300">The basic blog page layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>


				<h1 class="py-2 font-sans dark:text-gray-300">Heading 1</h1>
				<h2 class="py-2 font-sans dark:text-gray-300">Heading 2</h2>
				<h3 class="py-2 font-sans dark:text-gray-300">Heading 3</h3>
				<h4 class="py-2 font-sans dark:text-gray-300">Heading 4</h4>
				<h5 class="py-2 font-sans dark:text-gray-300">Heading 5</h5>
				<h6 class="py-2 font-sans dark:text-gray-300">Heading 6</h6>

				<p class="py-6 dark:text-gray-300">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>

				<ol>
					<li class="py-3 dark:text-gray-300">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>
					<li class="py-3 dark:text-gray-300">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
					<li class="py-3 dark:text-gray-300">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
				</ol>

				<blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12 dark:text-gray-300">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>

				<p class="py-6 dark:text-gray-300">Example code block:</p>
				<pre class="bg-gray-900 rounded text-white font-mono text-base p-2 md:p-4">
				<code class="break-words whitespace-pre-wrap">
		&lt;header class="site-header outer"&gt;
		&lt;div class="inner"&gt;
			{{&gt; "site-nav"}}
		&lt;/div&gt;
		&lt;/header&gt;
				</code>
			</pre>


				<!--/ Post Content-->

			</div>

			<!--Tags -->
			<div class="text-base md:text-sm text-gray-500 dark:text-gray-300 px-4 py-6">
				Tags: <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Link</a> . <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Link</a>
			</div>

			<!--Divider-->
			<hr class="border-b-2 border-gray-400 mx-4">

			<!--Author-->
			<div class="flex w-full items-center font-sans px-4 py-12">
				<img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
				<div class="flex-1 px-2">
					<p class="text-base font-bold dark:text-white text-base md:text-xl leading-none mb-2">Jo Bloggerson</p>
					<p class="text-gray-600 dark:text-gray-300 text-xs md:text-base">Minimal Blog Tailwind CSS template by <a class="text-green-500 no-underline hover:underline" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
				</div>
				<div class="justify-end ">
					<button class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 dark:text-gray-300 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read More</button>
				</div>
			</div>
			<!--/Author-->

			<!--Divider-->
			<hr class="border-b-2 border-gray-400 mb-8 mx-4">

			<!--Next & Prev Links-->
			<div class="font-sans flex justify-between content-center px-4 pb-12">
				<div class="text-left">
					<span class="text-xs md:text-sm font-normal text-gray-600 dark:text-gray-300">&lt; Previous Post</span><br>
					<p><a href="#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog title</a></p>
				</div>
				<div class="text-right">
					<span class="text-xs md:text-sm font-normal text-gray-600  dark:text-gray-300">Next Post &gt;</span><br>
					<p><a href="#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog title</a></p>
				</div>
			</div>


			<!--/Next & Prev Links-->

		</div>
	</div>
	<!--/container-->

	<footer class="bg-white dark:bg-gray-800 border-t border-gray-400 shadow">
		<div class="container max-w-4xl mx-auto flex py-8">

			<div class="w-full mx-auto flex flex-wrap">
				<div class="flex w-full md:w-1/2 ">
					<div class="px-8">
						<h3 class="font-bold text-gray-900 dark:text-white">About</h3>
						<p class="py-4 text-gray-600 dark:text-gray-400 text-sm">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
						</p>
					</div>
				</div>

				<div class="flex w-full md:w-1/2">
					<div class="px-8">
						<h3 class="font-bold text-gray-900 dark:text-white">Social</h3>
						<ul class="list-reset items-center text-sm pt-3">
							<li>
								<a class="inline-block text-gray-600 dark:text-gray-400 no-underline hover:text-gray-900  dark:hover:text-white hover:text-underline py-1" href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block text-gray-600 dark:text-gray-400 no-underline hover:text-gray-900  dark:hover:text-white hover:text-underline py-1" href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block text-gray-600 dark:text-gray-400 no-underline hover:text-gray-900  dark:hover:text-white hover:text-underline py-1" href="#">Add social link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</footer>

	<script src="./assets/js/jquery-3.4.1.min.js"></script>
	<script src="./assets/js/main.js"></script>
	<script src="./assets/js/blog.js"></script>

</body>

</html>