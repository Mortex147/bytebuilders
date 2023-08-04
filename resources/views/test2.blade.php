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
  <header class="w-[90%] mx-auto">
        <nav class="  flex justify-between items-center  my-7  font-medium">
            <div>
                <a href="/">
                    <img class="w-48" src="../bytebuilders-pics/logo.png" alt=" bytebuilders">
                </a>
            </div>
            <div class="nav-links duration-500 md:static absolute md:bg-white bg-[#5e60ce] h-full grid   md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full z-50 items-center px-5 ">
                <ul class="flex place-items-center md:flex-row flex-col z-20   md:gap-[2vw] gap-8  md:text-[#1D2025] text-white ">
                    <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="/">
                        <li>Home</li>
                    </a>
                    <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="about">
                        <li>About</li>
                    </a>
                    <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="blog">
                        <li>Blog</li>
                    </a>
                    <a class="md:hover:text-[#5e60ce] hover:text-[#1D2025] " href="contact">
                        <li>Contact us</li>
                    </a>

                    <button class="text-white px-6 mt-6 md:hidden  ">
                        Sign In
                    </button>
                    <button class="bg-white text-[#5e60ce] px-16 py-3 rounded-lg md:hidden  hover:bg-[#001B48]">
                        Sign Up
                    </button>

                </ul>
            </div>
            <div class="flex items-center gap-3">
                <button class="text-[#5E60CE] pr-5 hidden md:block  ">
                    Sign In
                </button>
                <button class="bg-[#5E60CE] text-white px-10 py-3 rounded-lg hidden md:block   hover:bg-[#001B48]">
                    Sign Up
                </button>
                <ion-icon onclick="onToggleMenu(this)" class="text-3xl z-50 cursor-pointer md:hidden" name="menu"></ion-icon>

            </div>
        </nav>
    </header>
    <div className="Rectangle110 w-96 h-80 bg-neutral-800" />
