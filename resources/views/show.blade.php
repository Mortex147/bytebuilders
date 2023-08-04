<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f fCode</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="../bytebuilders-pics/logoic.png">
    <link rel="stylesheet" href="resources/css/app.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        /* Optionally add custom CSS for the image */
        <style>
        /* Optionally add custom CSS for the image */
        .post-image {
            width: 1680px;
            height: 641px;
            top: 248px;
            left: 120px;
            border-radius: 10px;
            max-width: 100%;
            height: auto;
            position: relative;
        }
    </style>
    
    <script>
        function onToggleMenu(x) {
            const navlinks = document.querySelector('.nav-links');
            x.name = x.name === 'menu' ? 'close' : 'menu';
            navlinks.classList.toggle('top-[0%]');
        }
    </script>
</head>
<body>
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
   
    <main class="w-[90%] mx-auto mt-[70px]">
        <div>
            <!-- Display the post image -->
<img class="post-image w-15 mx-auto h-auto rounded-lg" style="max-width: 400px;
" src="{{ asset('storage/' . $post->post_image) }}" alt="Post Image">

            <!-- Display the post title and description -->
            <h1 class="font-bold text-[30px] lg:text-[40px]">{{ $post->post_title }}</h1>
            <h2 class="text-[#5b5a59] mb-[40px] text-[20px] lg:text-[25px]">{{ $post->post_description }}</h2>

            <!-- Display the post content -->
            <p class="text-[20px] text-[#363636] ">{{ $post->post_content }}</p>

            <!-- Display the post author information -->
            <div class="flex flex-col justify-center items-center my-12">
                <img class="w-[70px] mb-2 rounded-full" src="{{ asset('storage/' . $post->creator->profile_image) }}" alt="Author Image">
                <h1 class="text-[20px] font-bold text-[#0E1012]">{{ $post->creator->bytebuilder_name }}</h1>
                <h2 class="text-[#0D0C22]">{{ $post->creator->bytebuilder_category}}</h2>
                <h4 class="flex items-center text-[#9E9EA7]"> <ion-icon class="px-1" name="location"></ion-icon> {{ $post->creator->bytebuilder_city }}, {{ $post->creator->bytebuilder_country }}</h4>
            </div>
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


    <script src="../js/index.js"></script>
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

    </script>
</body>
</html>
