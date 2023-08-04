<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="../bytebuilders-pics/logoic.png">
    <script>function onToggleMenu(x) {
    const navlinks = document.querySelector('.nav-links')
    x.name = x.name === 'menu' ? 'close' : 'menu'
    navlinks.classList.toggle('top-[0%]')

}</script>
    <title>byte builders</title>
</head>

<body>
    <header class="w-[90%] mx-auto">
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
    </header>

    <main class="w-[90%] mx-auto mt-[70px] ">

        <div>
            <div>
                <img src="../bytebuilders-pics/article-cover.png" alt="">
                <h3 class="text-center text-[13px] mt-2 text-[#595555]">Vector space (Image hand-drawn by the Leonie Monigatti)</h3>
            </div>
            <div class="py-4">
                <h1 class="font-bold text-[30px] lg:text-[40px]">Explaining Vector Databases in 3 Levels of Difficulty</h1>
                <h2 class="text-[#5b5a59] mb-[40px] text-[20px] lg:text-[25px]">From noob to expert: Demystifying vector databases across different backgroundss</h2>
            </div>
            <div>
                <p class="text-[20px] text-[#363636] ">Vector databases have been getting a lot of attention recently, with many vector database startups raising millions in funding.
                    Chances are you have probably already heard of them but didn’t really care about them until now —at least, that’s what I guess why you are here now…
                    <br> If you are here just for the short answer, let's jump right in:
                </p>
                <h1 class="font-bold text-[27px] mt-6">Definition: What is a Vector Database?</h1>
                <p class="text-[20px] text-[#363636]">A vector database is a type of database that stores and manages unstructured data, such as text, images, or audio, in vector embeddings (high-dimensional vectors) to make it easy to find and retrieve similar objects quickly.
                    If that definition only caused more confusion, then let’s go step by step. This article is inspired by <a class="underline" href=""> WIRED’s “5 Levels” Video Series</a> and unpacks what vector databases are in the following three levels of difficulty:
                <div class="text-[20px] text-[#363636] underline ml-4 mt-2">

                    <a href="https://towardsdatascience.com/explaining-vector-databases-in-3-levels-of-difficulty-fc392e48ab78#8273" target="_blank">
                        <li> Explain It Like I’m 5 </li>
                    </a>
                    <li> Explaining Vector Databases to Digital Natives and Tech Enthusiasts </li>
                    <li> Explaining Vector Databases to Engineers and Data Professionals </li>
                </div>

                </p>
                <h1 class="font-bold text-[27px] mt-6">Vector Databases: Explain It Like I’m 5 (ELI5)</h1>
                <p class="text-[20px] text-[#363636] ">This is slightly off-topic, but do you know what I don’t understand?
                    <br> When people arrange their bookshelves by color. — Yikes!
                    <br> How do they find a book when they don’t know what color the book cover is?
                </p>
                <img class="w-1/2 mx-auto mt-8" class="" src="../bytebuilders-pics/image-article.png" alt="">
                <h3 class="text-center text-[13px] mt-2 text-[#595555]">Photo by Luisa Brimble on Unsplash</h3>
                <h1 class="font-bold text-[27px] mt-6">The intuition behind vector databases</h1>
                <p class="text-[20px] text-[#363636] ">
                    If you want to find a specific book quickly, arranging your bookshelf by genre and then by the author makes much more sense than by color. That’s why most libraries are organized in this way to help you find what you’re looking for quickly.
                    But how do you find something to read based on a query instead of a genre or an author? What if you want to read a book that is, for example:
                    similar to “The Very Hungry Caterpillar” or
                    about a main character that likes eating as much as you do?
                    If you don’t have the time to browse the bookshelves, the fastest way to go about this would be to ask the librarian for their recommendation because they have read a lot of the books and will know exactly which one fits your query best.
                </p>

            </div>
            <div class="flex flex-col justify-center items-center my-12">
                <img class="w-[70px] mb-2" src="../bytebuilders-pics/avatar-article.png" alt="">
                <h1 class="text-[20px] font-bold text-[#0E1012]">Abdelhakim Ait Dabel</h1>
                <h2 class="text-[#0D0C22]">Web Dev | UX/UI Designer</h2>
                <h4 class="flex items-center text-[#9E9EA7]"> <ion-icon class="px-1" name="location"></ion-icon> Taroudant, Morocco</h4>


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
</body>

</html>