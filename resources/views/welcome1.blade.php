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
    <main>
        <section id="Home" class="w-[90%] mx-auto">
            <div class="container ">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center md:mt-14 mb-12 md:text-left md:w-1/2 md:pr-10 ">
                        <h1 class="text-5xl md:text-6xl font-bold leading-snug text-[#1D2025] md:leading-snug">
                            We build <br> digital <br> experiences.
                        </h1>
                        <p class="text-[#595555] mt-4 mb-8 leading-relaxed ">It’s ipsum dolor sit amet consectetur. Sem eget dictum orci ornare. Tempuitor diam ultricies.</p>
                        <div class="flex flex-col md:flex-row px-16 md:px-0 my-5  ">
                            <button class="bg-[#5E60CE] text-white font-medium px-10 py-3 rounded-lg  hover:bg-[#001B48]">
                                Get Started
                            </button>
                            <a href="#howitworks">
                                <button class=" font-medium flex  flex-row md:mt-1 mt-5 md:flex-row items-center mx-auto md:ml-5 ">
                                    <ion-icon class="icon-con text-4xl mr-3 " name="play-circle-outline"></ion-icon>
                                    See How It Works?
                                </button></a>
                        </div>
                    </div>
                    <div>
                        <img class="w-[650px]" src="../bytebuilders-pics/Saly-10.png" alt="heroimg">
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="mt-24 w-[90%] mx-auto">
            <div>
                <h1 class="font-bold text-center text-5xl mb-4 text-[#1D2025]">Like an agency,<br> unlike any agency</h1>
                <p class="text-center  text-[#595555] mb-10">Lorem ipsum dolor sit amet consectetur. Id in sit <br> venenatitur eros. a eu veati</p>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 justify-center place-items-center   lg:px-20 lg:gap-20 gap-8">
                    <div class="flex flex-col justify-center border-2 border-solid rounded-2xl border-[#001B48] px-5  w-[280px] h-[330px] cursor-pointer  hover:bg-[#6930C3] hover:border-[#6930C3] hover:text-white  duration-500 ">

                        <ion-icon name="brush" class="bg-[#6930C3] hover:bg-white hover:text-[#6930C3] duration-300 text-white rounded-full p-5  text-4xl"></ion-icon>
                        <h3 class="h3 font-bold  text-3xl mt-6 mb-4 ">UX/UI Design</h3>
                        <p class="p leading-relaxed text-[14px]  ">Lorem ipsum dolor sit consectetur. Id in sit velit venena titurpis aliquam eros justo esta eu veati.</p>

                    </div>
                    <div class="flex flex-col justify-center border-2 border-solid rounded-2xl border-[#001B48] px-5   w-[280px] h-[330px] hover:bg-[#48BFE3] cursor-pointer  hover:bg-[#48BFE3] hover:border-[#48BFE3] hover:text-white duration-500  ">

                        <ion-icon name="cube" class="bg-[#48BFE3] hover:bg-white hover:text-[#48BFE3] duration-300 text-white rounded-full p-5 text-4xl"></ion-icon>
                        <h3 class="font-bold  text-3xl mt-6 mb-4">Development</h3>
                        <p class=" leading-relaxed  text-[14px]  ">Lorem ipsum dolor sit consectetur. Id in sit velit venena titurpis aliquam eros justo esta eu veati.</p>


                    </div>

                    <div class="flex flex-col justify-center border-2 border-solid rounded-2xl border-[#001B48] px-5   w-[280px] h-[330px] cursor-pointer  hover:bg-[#5390D9] hover:border-[#5390D9] hover:text-white duration-500  ">

                        <ion-icon name="megaphone" class="bg-[#5390D9] hover:bg-white hover:text-[#5390D9] duration-300 text-white rounded-full p-5  text-4xl"></ion-icon>

                        <h3 class="font-bold  text-3xl mt-6 mb-4">Marketing</h3>
                        <p class=" leading-relaxed  text-[14px]  ">Lorem ipsum dolor sit consectetur. Id in sit velit venena titurpis aliquam eros justo esta eu veati.</p>

                    </div>
                </div>
            </div>
        </section>
        <section id="stats" class="my-20">
            <div class=" bg-[#0E1012] grid lg:grid-cols-4 md:grid-cols-2  gap-12 md:gap-0 text-white p-12  text-center ">
                <div class="lg:border-r-[1px]   border-[#777777] ">
                    <h1 class="text-3xl font-bold">120+ </h1>
                    <h3>Projects Complated</h3>
                </div>

                <div class="lg:border-r-[1px]   border-[#777777]">
                    <h1 class="text-3xl font-bold">30+</h1>
                    <h3>Happy Clients</h3>
                </div>

                <div class="lg:border-r-[1px]   border-[#777777]">
                    <h1 class="text-3xl font-bold">5+</h1>
                    <h3>Years Experience</h3>
                </div>
                <div>
                    <h1 class="text-3xl font-bold">8</h1>
                    <h3>Active Clients</h3>
                </div>
            </div>
        </section>
        <section id="howitworks">
            <div class=" w-[90%] mx-auto py-5 relative">
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class=" mb-12 md:w-1/2">
                        <img src="../bytebuilders-pics/howit.png" alt="How it works">
                    </div>
                    <div class="text-center md:text-left md:w-1/2  md:ml-20">
                        <h1 class="text-5xl  font-bold leading-snug text-[#1D2025]  mb-5">
                            How it works?
                        </h1>
                        <p class="text-[#595555] mb-10 text-xl leading-relaxed	">Lorem ipsum dolor sit amet consectetur. Id in sit velit venenatiturpis aliquam eros justo est. a eu veatis
                            is aliquam eros justo est Sagittis. <br> <br> Amet purus duis. Dui pellentesque aenean egllus diam Nibh sed vulputate nibh laoreet cras te dolor.</p>
                        <button class="bg-[#5E60CE] text-white font-medium px-14 py-3   rounded-lg  hover:bg-[#001B48]">
                            Read more
                        </button>
                    </div>
                </div>
            </div>

        </section>
        <section id="team" class=" w-[90%] mx-auto">
            <div>
                <div class=" my-12 text-center font-bold text-4xl text-[#0E1012]">
                    <h1>Our Leading, Strong And <br> Creative Team</h1>
                </div>

                <div class=" grid  place-items-center lg:grid-cols-4 md:grid-cols-2 gap-8 sm:grid-cols-1 md:gap-5 text-white  text-center ">
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar1.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Taroudant</h4>

                            <h2 class="py-1 text-xl font-semibold">Abdelhakim Ait Dabel</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Web Dev | UX/UI Designer</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-dribbble"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>


                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4  mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar2.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Agadir</h4>

                            <h2 class="py-1 text-xl font-semibold">Nouredine Achlafta</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Front & Back End Dev</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar3.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Errachidia</h4>

                            <h2 class="py-1 text-xl font-semibold">Omayma</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Front & Back End Dev</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar4.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Agadir</h4>

                            <h2 class="py-1 text-xl font-semibold">Achraf Azizi</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Front & Back End Dev</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar5.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Agadir</h4>

                            <h2 class="py-1 text-xl font-semibold">Mouatassim Adab</h2>
                            <p class="text-[#EFE5D7] text-[15px]">UX/UI Designer</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-dribbble"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar6.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Agadir</h4>

                            <h2 class="py-1 text-xl font-semibold">Anwar</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Front End Developer</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar7.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Agadir</h4>

                            <h2 class="py-1 text-xl font-semibold">Tariq Ait lakhlift</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Front & Back End Dev</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                    <div class="bg-[#0E1012] w-60 p-4 mb-4 rounded-xl ">
                        <img class="object-cover rounded-xl cursor-pointer " src="../bytebuilders-pics/avatar8.png" alt="avatar">
                        <div class="text-white ">


                            <h4 class="flex justify-center flex-row items-center pt-3  text-[14px] text-[#EFE5D7]"> <ion-icon class="px-1" name="location"></ion-icon> Agadir</h4>

                            <h2 class="py-1 text-xl font-semibold">Rachida</h2>
                            <p class="text-[#EFE5D7] text-[15px]">Front & Back End Dev</p>
                            <div class="px-3 pt-4 flex justify-between items-center">
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer " name="logo-github"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-twitter"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-linkedin"></ion-icon>
                                <ion-icon class="text-[#EFE5D7] bg-[#424242] p-[10px] rounded hover:bg-[#EFE5D7] hover:text-[#424242] cursor-pointer" name="logo-instagram"></ion-icon>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="grid place-items-center pt-5 pb-16">
                    <button class="bg-[#0E1012] text-white font-medium px-14 py-3 rounded-lg hover:bg-[#2F2F2F] grid grid-cols-1 ">
                        View more
                    </button>
                </div>
            </div>

        </section>


    </main>
    <footer>
        <section id="footer" class="bg-[#0E1012] ">
            <div class="w-[90%] mx-auto md:py-5 py-8 ">
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
                                    <ion-icon class="text-2xl" name="chevron-forward-outline"></ion-icon>
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