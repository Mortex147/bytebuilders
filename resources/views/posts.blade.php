    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>faaaCode</title>
        @vite('resources/css/app.css')
        <link rel="icon" href="../bytebuilders-pics/logoic.png">
        <link rel="stylesheet" href="resources/css/app.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            function onToggleMenu(x) {
                const navlinks = document.querySelector('.nav-links');
                x.name = x.name === 'menu' ? 'close' : 'menu';
                navlinks.classList.toggle('top-[0%]');
            }
        </script>
        <style>
        /* Styles for the images */
        .image-container {
            width: 331px;
            height: 331px;
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>


    </head>


    <body class="">
            <nav class="  flex justify-between items-center  my-7  font-medium w-[90%] mx-auto">
                <div>
                    <a href="/">
                        <a href="welcome1"> <img class="w-48" src="../bytebuilders-pics/logo.png"  alt=" bytebuilders">  </a>
                    </a>
                </div>
                <div class="nav-links duration-500 md:static absolute md:bg-white bg-[#5e60ce] h-full grid   md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full z-50 items-center px-5 ">
                    <ul class="flex place-items-center md:flex-row flex-col z-20   md:gap-[2vw] gap-8  md:text-[#1D2025] text-white ">
                        <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="welcome1">
                            <li>Home</li>
                        </a>
                        <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="about">
                            <li>About</li>
                        </a>
                        <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="posts">
                            <li>Blog</li>
                        </a>
                        <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="contact">
                            <li>Contact us</li>
                        </a>

                        {{-- <button  class="text-white px-6 mt-6 md:hidden  ">
                        <a href="{{route('create')}}" >Sign In</a> 
                        </button>
                        <button class="bg-white text-[#5e60ce] px-16 py-3 rounded-lg md:hidden  hover:bg-[#001B48]">
                            Sign Up
                        </button> --}}

                    </ul>
                </div>
                <div class="flex items-center gap-3">
                    <button class="text-[#5E60CE] pr-5 hidden md:block  ">
                        <a href="{{route('login1')}}" >Sign In</a> 
                    </button>
                    <button class="bg-[#5E60CE] text-white px-10 py-3 rounded-lg hidden md:block   hover:bg-[#001B48]">
        <a href="{{route('create')}}" >Sign Up</a>            </button>
                    <ion-icon onclick="onToggleMenu(this)" class="text-3xl z-50 cursor-pointer md:hidden" name="menu"></ion-icon>

                </div>
            </nav>

            <div class="flex items-center justify-center mt-12">
                <form action="{{ route('posts.search') }}" method="GET">
                    <div style="width: 500px;" class="relative h-104px bg-[#F9F9F9] rounded-full flex items-center px-4">
                        <input type="text" name="search" placeholder="Search"
                            class="w-full pl-12 pr-8 py-2 rounded-full bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute left-4">
                            <button type="submit" class="cursor-pointer">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            

        <div class="flex items-center justify-center mt-2">
            <p class="text-sm font-semibold">
                <span style="color: #757575;">Recommended:</span>
                <span class="mx-2">Data Science</span>
                <span class="mx-2">Programming</span>
                <span class="mx-2">UX/UI</span>
            </p>
        </div>

    <main class="mx-7 lg:mx-6 mt-32 flex-grow">
        <div class="max-w-5xl mx-auto relative">
        <!-- Small Rectangles -->
        <div class="flex justify-between mb-5 flex-wrap"> <!-- Add flex-wrap for responsiveness -->
            <div class="w-auto"> <!-- Add w-auto to adjust the width based on content -->
                <div class="bg-blue-600 rounded-full flex items-center justify-center text-white text-sm ml-4 pl-2 pb-2 pr-2 pt-2">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M16.25 8.4L7.75 12L16.25 15.6V8.4Z" />
                    </svg>
                    Discover
                </div>
            </div>
            @foreach ($categories as $category)
                <a href="{{ route('posts.index', ['category' => $category->category_name]) }}" class="bg-gray-200 rounded-full w-full sm:w-auto ml-4 mb-3 pl-2 pb-2 pr-2 pt-2 category-button">
                    <div class="rounded-l-full rounded-r-full flex items-center justify-center text-black text-sm">{{ $category->category_name }}</div>
                </a>
            @endforeach
                    <a href="{{ route('posts.index', ['category' => 'all']) }}" class="bg-gray-200 rounded-full w-full sm:w-auto ml-4 mb-3 pl-2 pb-2 pr-2 pt-2 category-button">
        <div class="rounded-l-full rounded-r-full flex items-center justify-center text-black text-sm">All</div>
        </a>
                    </div>

    <!-- Cards -->
    <div class="flex flex-wrap -mx-2">
        @foreach ($posts as $post)
            <div class="w-full sm:w-1/2 md:w-1/3 self-stretch p-2 mb-2">
                <div class="rounded shadow-md h-full card flex flex-col">
                    <!-- Wrap the post image with an anchor tag -->
                    <a href="/post/{{ $post->id }}">
                        <div class="image-container">
                                    <img src="{{ asset('storage/' . $post->post_image) }}" alt="This post thumbnail">
                                </div>
                    </a>
                    <div class="px-6 py-5 flex-grow">
                        <div>
                            <!-- Wrap the post title with an anchor tag -->
                            <div class="font-semibold text-lg mb-2">
                                <a class="text-slate-900 hover:text-slate-700" href="/post/{{ $post->id }}">{{ $post->post_title }}</a>
                            </div>
                            <p class="text-slate-700 mb-1" title="Published date">{{ $post->created_at->format('d F Y H:i A') }}</p>
                            <p class="text-slate-800  overflow-hidden h-24">{{ $post->post_description }}</p>
                        </div>
                    </div>
                    <div class="px-6 py-2">
                        <!-- Author information -->
                        <div class="flex items-center">
                            <img src="{{ asset('storage/' . $post->creator->profile_image) }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <p class="text-gray-700 font-medium">{{ $post->creator->bytebuilder_name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    </main>

        <footer>
            <section id="footer" class="bg-[#0E1012] ">
                <div class="w-[90%] mx-auto md:py-5 pt-8 ">
                    <div class="w-[90] flex justify-between flex-col md:flex-row items-center md:items-center mb-4">
                        <a href="/">
                            <img class="w-48" src="../bytebuilders-pics/logo.png" alt=" bytebuilders">
                        </a>
                        <div class="flex items-center md:flex-row flex-col gap-4 md:gap-6 py-5">
                            <h1 class="text-[#ECECEC]">Ready to get started?</h1>
                            <button class="bg-[#5E60CE] text-white font-medium px-10 py-3 rounded-lg  hover:bg-[#001B48]">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="flex md:gap-[250px] flex-col  md:flex-row ">
                        <div class="pt-8 flex  text-center md:text-left flex-col px-5  md:px-0 ">
                            <h1 class=" font-bold text-[23px] text-white leading-rleaxed tracking-normal mb-5">Subscribe to our <br> newsletter</h1>

                            <form action="#" method="$_POST">
                                <div class="flex items-center max-w-md mx-auto  rounded-lg  ">
                                    <div class="w-full">
                                        <input type="email" class=" w-full border-b-[3px] px-3 py-2 text-white bg-[#0E1012]  focus:outline-none" placeholder="Email address" required>
                                    </div>
                                    <button type="submit" class="flex items-center bg-[#5E60CE] justify-center w-14 h-[43px] text-white rounded-r-lg">
                                        <ion-icon class="text-2xl " name="chevron-forward-outline"></ion-icon>
                                    </button>

                                </div>
                            </form>

                        </div>
                        <div class="links flex md:gap-[120px] flex-col  md:flex-row ">
                            <div class="pt-8">
                                <h1 class="font-bold text-white text-[17px]"> Services</h1>
                                <ul class=" pt-2  text-[#E1E1E1]">
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">UX/UI Design</li>
                                    </a>
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Web Development</li>
                                    </a>
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Mobile Development</li>
                                    </a>
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Digital Marketing</li>
                                    </a>
                                </ul>
                            </div>
                            <div class="pt-8">
                                <h1 class="font-bold text-white text-[17px]"> About</h1>
                                <ul class=" pt-2  text-[#E1E1E1]">
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Team</li>
                                    </a>
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Blog</li>
                                    </a>
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Careers</li>
                                    </a>
                                </ul>
                            </div>
                            <div class="pt-8">
                                <h1 class="font-bold text-white text-[17px]"> Help</h1>
                                <ul class=" pt-2  text-[#E1E1E1]">
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">How it works?</li>
                                    </a>
                                    <a class="hover:text-white hover:underline" href="#">
                                        <li class="py-1">Contact us</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-col md:justify-between mt-8 gap-10  ">
                        <div class="text-white flex md:flex-row md:gap-8 flex-col gap-3  ">
                            <a href="https://bytebuild.ma " class="hover:text-white hover:underline" target="_blank">
                                <h1>© 2024 ByteBuild </h1>
                            </a>
                            <a href="#" class="hover:text-white hover:underline">
                                <h1>Terms & Conditions</h1>
                            </a>
                            <a href="#" class="hover:text-white hover:underline">
                                <h1>Privacy Policy</h1>
                            </a>
                        </div>
                        <div class="text-white text-[23px] flex flex-row pb-8 md:pb-0 ">
                            <a href="#"><ion-icon class="pr-4 hover:text-[#5E60CE]" name="logo-twitter"></ion-icon></a>
                            <a href="#"><ion-icon class="pr-4 hover:text-[#5E60CE]" name="logo-linkedin"></ion-icon></a>
                            <a href="#"><ion-icon class="pr-4 hover:text-[#5E60CE]" name="logo-instagram"></ion-icon></a>
                            <a href="#"><ion-icon class="pr-4 hover:text-[#5E60CE]" name="logo-discord"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </section>
        </footer>


        <script>
            function toggleMobileMenu() {
                const mobileMenu = document.querySelector('.mobile-menu');
                mobileMenu.classList.toggle('hidden');
            }

        </script>
    </body>

    </html>