{{-- @vite('resources/js/app.js') --}}
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="app.css">
<!-- component -->
<div class="bg-white relative min-h-screen max-h-screen ">
  <div class="flex flex-col items-center justify-between pt-10 px-5 md:pt-20 md:flex-row">
    <div class="flex flex-col items-center w-full md:flex-row">
      <div class="absolute top-0 left-0 mt-4 ml-4">
        <a href="welcome1" > <img src="Group 39.png" class="h-12" alt="Brand Logo"></a> 
      </div>
      <div class="w-full bg-cover max-w-md h-80 md:max-w-2xl md:w-7/12">
        <div class="flex items-center justify-center w-full h-full">
          <img src="Saly-22.png" class="image" alt="Run Health" />
        </div>
      </div>
      
      <div class="w-full mt-10 md:mt-0 md:w-5/12 overflow-y-auto">
        <div class="flex flex-col items-start justify-start pt-10 pr-10 pb-10 pl-10 bg-white shadow-2xl rounded-xl">
          <p class="w-full text-4xl font-medium text-center">Welcome Back!</p>
      
          <div class="w-full mt-6 space-y-8">
            <form action="{{ route('login') }}" method="POST" class="w-full mt-6 space-y-8">
              @csrf
            <div class="relative">
              <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 ml-2 font-medium text-gray-600 absolute">Email</p>
              <input placeholder="Enter Your Email" name="bytebuilder_email" type="email" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md"/>
            </div>
            <div class="relative">
              <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 ml-2 font-medium text-gray-600 absolute">Password</p>
              <input placeholder="***********" name="bytebuilder_password" type="password" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 text-base block bg-white border-gray-300 rounded-md"/>
            </div>
            <div class="relative">
              <button type="submit" class="w-full inline-block pt-4 pr-5 pb-4 pl-5 mb-6 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease">Log in</button>
            </div>
            <div class="relative">
              <a href="{{route('forgot.password')}}" class="text-indigo-500 text-sm font-medium absolute bottom-2 right-2">
                Forgot Password
              </a>
            </div>
          
          </form>
       
            <div class="relative">
              <p class="flex items-center justify-center w-full pt-2 text-gray-600">
                <span class="border-b border-gray-300 w-1/4"></span>
                <span class="px-4">or</span>
                <span class="border-b border-gray-300 w-1/4"></span>
              </p>
            </div>
          
            <div class="relative">
              <a href="{{route('google-auth')}}" class="flex items-center justify-center w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-gray-800 bg-white border border-gray-300 rounded-lg transition duration-200 hover:bg-gray-200 ease">
                <img src="bytebuilders.png" class="h-6 mr-2" alt="Gmail Logo">
                Log in with Gmail
              </a>
              <a href="{{route('github-auth')}}" class="flex items-center justify-center w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-gray-800 bg-whit border border-gray-300 rounded-lg transition duration-200 hover:bg-gray-200 ease">
                <img src="github.png" class="h-8 mr-2" alt="Gmail Logo">
                Sign up with GitHub
              </a>
            </div>

            <div class="relative">
              <p class="text-center mt-6">
                <span class="text-gray-500">Need an account?</span>
                <a href="create" class="text-blue-500 hover:text-blue-600 underline">Sign up</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
