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
    <script></script>
    <title>byte builders</title>

    <style>
        .faq.active .icon {
            transform: rotate(180deg);
        }

        .faq.active .answer {
            max-height: 300px;

        }
    </style>    
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

<main class="w-[90%] mx-auto py-16">
        <section id="contact-form">
            <div class="flex lg:flex-row flex-col  px-12 mt-[10%] lg:gap-[160px] lg:items-center text-center lg:text-left">
                <div class="mb-3">
                    <h1 class="font-bold text-5xl text-[#1D2025] ">Get In Touch</h1>
                    <p class=" text-[#595555]">We want to hear from you. Let us know how we can help.</p>
                    <div class="flex flex-col lg:flex-row  items-center pt-12 lg:pt-0 gap-2 lg:gap-4">
                        <ion-icon class="bg-[#5E60CE] p-3 text-xl lg:text-[13px] text-white rounded-md" name="chatbubbles"></ion-icon>
                        <div class="flex flex-col text-center lg:text-left lg:mt-12  ">
                            <h1 class="font-medium text-[19px]  "> Chat to us </h1>
                            <h2 class="text-[#595555] mb-1 text-[17px]">Our friendly team is here to help.</h2>
                            <h3 class="text-[17px]">support@bytebuilders.com</h3>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row  items-center  pt-12 lg:pt-0  gap-2 lg:gap-4">
                        <ion-icon class="bg-[#5E60CE] p-3 text-xl lg:text-[13px] text-white rounded-md" name="location"></ion-icon>
                        <div class="flex flex-col text-center lg:text-left lg:mt-12  ">
                            <h1 class="font-medium text-[19px]  "> Visit us </h1>
                            <h2 class="text-[#595555] mb-1 text-[17px]">come say hello at our office HQ.</h2>
                            <h3 class="text-[17px]">1st Floor TA135, Technopark Bytebuild, Agadir 80000</h3>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row  items-center  pt-12 lg:pt-0 gap-2 lg:gap-4">
                        <ion-icon class="bg-[#5E60CE] p-3 text-xl lg:text-[13px] text-white rounded-md" name="call"></ion-icon>
                        <div class="flex flex-col text-center lg:text-left lg:mt-12  ">
                            <h1 class="font-medium text-[19px]  "> Call us </h1>
                            <h2 class="text-[#595555] mb-1 text-[17px]">Mon-Sat from 9am to 6pm.</h2>
                            <h3 class="text-[17px]">+212 525-177581</h3>
                        </div>
                    </div>

                </div>
                <ul class="list-none flex place-items-center md:flex-row flex-col z-20 md:gap-[2vw] gap-8 md:text-[#1D2025] text-white">
                    <li><br /><br /><br><br /><br /><br /><br />
                        <div class="card-body">
                            @if(Session::has('success'))
                                <div class="bg-green-500 text-white py-2 px-4 rounded-lg my-4">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                        
                            <form method="POST" action="{{ route('send.email') }}">
                                @csrf
                                @if(Session::has('error'))
                                    <div class="bg-red-500 text-white py-2 px-4 rounded-lg my-4">
                                        {{ Session::get('error') }}
                                        @php
                                            Session::forget('error');
                                        @endphp
                                    </div>
                                @endif
                        
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full lg:w-1/2 px-2">
                                        <div class="form-group">
                                            <br />
                                            <input class="rounded-lg bg-gray-200 h-12 w-full px-4 placeholder-gray-600 outline-none" name="name" type="text" placeholder="Enter your name" required>
                                            @error('name')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/2 px-2">
                                        <div class="form-group">
                                            <br />
                                            <input name="email" class="rounded-lg bg-gray-200 h-12 w-full px-4 placeholder-gray-600 outline-none" type="email" placeholder="Enter your email" required>
                                            @error('email')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full px-2">
                                        <div class="form-group">
                                            <br />
                                            <input name="subject" class="rounded-lg bg-gray-200 h-12 w-full px-4 placeholder-gray-600 outline-none" type="text" placeholder="Enter your subject" required>
                                            @error('subject')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-full px-2">
                                        <div class="form-group">
                                            <br />
                                            <textarea name="message" class="rounded-lg bg-gray-200 h-32 w-full px-4 py-2 placeholder-gray-600 outline-none" placeholder="Enter your message" required></textarea>
                                            @error('message')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group text-center">
                                    <button class="btn btn-success btn-submit bg-indigo-600 py-3 px-6 rounded-lg text-white font-medium">Save</button>
                                </div>
                            </form>
                        </div>
                        
                    </li>
                </ul>


            </div>
        </section>
        <section id="googlemap" class="my-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.164672176102!2d-9.530900424771788!3d30.403069474744996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c9a6f13fa997%3A0x6855f58ae9d88cda!2sBytebuild!5e0!3m2!1sen!2sma!4v1689624858348!5m2!1sen!2sma" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded "></iframe>
        </section>

        <section id="FAQ" class="pb-20" >
             
            <h1 class="text-5xl font-medium text-[#1D2025] pb-16">Frequently asked <br> questions</h1>
            <div class="faq pb-8 flex flex-col text-left lg:w-[50%] md:w-[70%] mx-auto cursor-pointer ">
                <div class="question peer flex justify-between  flex-row text-[#1D2025] items-center">
                    <h2 class="font-medium text-2xl  ">How can i join the community?</h2>
                   
                    <ion-icon class="icon text-3xl transition-transform duration-500 ease-in;" name="chevron-down-outline"></ion-icon>

                </div>
                <div class="answer border-b-2 border-[#D9D9D9] py-2  max-h-0 overflow-hidden  transition-max-height duration-700 ease-in-out;">
                    <p class="py-8 text-[#595555] pr-1 ">
                    Lorem ipsum dolor sit amet consectetur. Varius congue cursus phasellus amet. Lacus nam elementum quis elementum hendrerit turpis interdum lacus. In vitae sagittis proin at commodo semper. Id vitae lorem fames nibh erat pulvinar nunc mauris augue varius.
                    </p>
                </div>
            </div>
            <div class="faq pb-8 flex flex-col text-left lg:w-[50%] md:w-[70%] mx-auto cursor-pointer ">
                <div class="question peer flex justify-between  flex-row text-[#1D2025] items-center">
                    <h2 class="font-medium text-2xl  ">How can i contribute the community?</h2>
                   
                    <ion-icon class="icon text-3xl transition-transform duration-500 ease-in;" name="chevron-down-outline"></ion-icon>

                </div>
                <div class="answer border-b-2 border-[#D9D9D9] py-2  max-h-0 overflow-hidden  transition-max-height duration-700 ease-in-out;">
                    <p class="py-8 text-[#595555] pr-1 ">
                    Lorem ipsum dolor sit amet consectetur. Varius congue cursus phasellus amet. Lacus nam elementum quis elementum hendrerit turpis interdum lacus. In vitae sagittis proin at commodo semper. Id vitae lorem fames nibh erat pulvinar nunc mauris augue varius.
                    </p>
                </div>
            </div>
            <div class="faq pb-8 flex flex-col text-left lg:w-[50%] md:w-[70%] mx-auto cursor-pointer ">
                <div class="question peer flex justify-between  flex-row text-[#1D2025] items-center">
                    <h2 class="font-medium text-2xl  ">Why should i join the community?</h2>
                   
                    <ion-icon class="icon text-3xl transition-transform duration-500 ease-in;" name="chevron-down-outline"></ion-icon>

                </div>
                <div class="answer border-b-2 border-[#D9D9D9] py-2  max-h-0 overflow-hidden  transition-max-height duration-700 ease-in-out;">
                    <p class="py-8 text-[#595555] pr-1 ">
                    Lorem ipsum dolor sit amet consectetur. Varius congue cursus phasellus amet. Lacus nam elementum quis elementum hendrerit turpis interdum lacus. In vitae sagittis proin at commodo semper. Id vitae lorem fames nibh erat pulvinar nunc mauris augue varius.
                    </p>
                </div>
            </div>
            <div class="faq pb-8 flex flex-col text-left lg:w-[50%] md:w-[70%] mx-auto cursor-pointer ">
                <div class="question peer flex justify-between  flex-row text-[#1D2025] items-center">
                    <h2 class="font-medium text-2xl  ">Can i make profit on the community?</h2>
                   
                    <ion-icon class="icon text-3xl transition-transform duration-500 ease-in;" name="chevron-down-outline"></ion-icon>

                </div>
                <div class="answer border-b-2 border-[#D9D9D9] py-2  max-h-0 overflow-hidden  transition-max-height duration-700 ease-in-out;">
                    <p class="py-8 text-[#595555] pr-1 ">
                    Lorem ipsum dolor sit amet consectetur. Varius congue cursus phasellus amet. Lacus nam elementum quis elementum hendrerit turpis interdum lacus. In vitae sagittis proin at commodo semper. Id vitae lorem fames nibh erat pulvinar nunc mauris augue varius.
                    </p>
                </div>
            </div> 
          
            
              
    </section>

    </main>


    <footer>
        <section id="footer" class="bg-[#0E1012] ">
            <div class="w-[90%] mx-auto md:py-5 pt-8 ">
                <div class="w-[90] flex justify-between flex-col md:flex-row items-center md:items-center mb-4">
                    <a href="/">
                        <img class="w-48" src="../bytebuilders-pics/logo.png" alt="bytebuilders">
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
                                <a class="hover:text-white hover:underline" href="#">
                                    <li class="py-1">Contact</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between pt-8 flex-col md:flex-row pb-6">
                    <div class="social-media flex gap-4">
                        <a href="#" class="text-white">
                            <ion-icon class="text-2xl" name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#" class="text-white">
                            <ion-icon class="text-2xl" name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#" class="text-white">
                            <ion-icon class="text-2xl" name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                    <p class="text-[#E1E1E1] text-[14px]"> © 2023 ByteBuilders. All rights reserved.</p>
                </div>

            </div>
        </section>
    </footer>

  <script>

        function onToggleMenu(x) {
    const navlinks = document.querySelector('.nav-links')
    x.name = x.name === 'menu' ? 'close' : 'menu'
    navlinks.classList.toggle('top-[0%]')

} </script>
     <script src="../js/index.js"></script>
    
    
    
</body>

</html>