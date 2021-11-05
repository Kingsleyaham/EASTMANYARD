<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Testing How to Use Laravel Authentication System</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="{{ asset('img/logo.jpg')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
       <nav class="bg-white shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
                        <div>
							<!-- Website Logo -->
							<a href="{{ route('home') }}" class="flex items-center py-4 px-2">
								<img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="h-8 w-8 mr-2">
								<span class="font-semibold text-gray-700 text-lg">Eastman Yard</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="{{ route('home') }}" class="py-4 px-2 text-gray-500 hover:text-green-500  font-semibold ">Home</a>
							<a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
							<a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
							<a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
							<a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Blog</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					@guest
						<div class="hidden md:flex items-center space-x-3 ">
						<a href="{{ route('login')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
						<a href="{{ route('register')}}" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Register</a>
					</div>	
					@endguest
					@auth
						<div class="hidden md:flex items-center space-x-3 ">
							<form action="{{ route('logout') }}" method="post" class="inline">
								@csrf
								<button type="submit" class="py-2 px-2 font-medium text-gray-500 rounded hover:text-green-500 transition duration-300">Logout</button>
							</form>
							<a href="{{ route('dashboard')}}" class="py-2 px-2 font-medium text-white rounded bg-green-500  hover:bg-green-400 hover:text-white transition duration-300">Dashboard</a>
						</div>	
					@endauth
					
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
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
					<li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
					<li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
					<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
					<li><a href="#blog" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Blog</a></li>
				    @guest
						<li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Log In</a></li>
						<li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Register</a></li>	
					@endguest
					@auth
						<div class="hidden md:flex items-center space-x-3 ">
							<form action="{{ route('logout') }}" method="post" class="inline">
								@csrf
								<button type="submit" class="py-2 px-2 font-medium text-gray-500 rounded hover:text-green-500 transition duration-300">Logout</button>
							</form>
							<a href="{{ route('dashboard')}}" class="py-2 px-2 font-medium text-white rounded bg-green-500  hover:bg-green-400 hover:text-white transition duration-300">Dashboard</a>
						</div>	
					@endauth
                </ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>
        @yield('content')
        <div class="bg-gray-900 py-4 text-center pr-8  bottom-0 w-screen">
            <p class="text-white">Designed and Developed by Kingsley</p>
        </div>
    </body>
</html>