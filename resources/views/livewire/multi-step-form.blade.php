
<div>
  
  <div>
     {{--STEP 1--}}
     @if ($currentSteps == 1)
     
     <ol class="flex items-center justify-center w-full space-x-20 space-y-4 sm:flex sm:space-y-0">
         <li class="flex flex-col items-center">
           <span class="flex items-center justify-center w-10 h-10 border-2 border-blue-600 dark:border-blue-500 rounded-full bg-blue-600">
             1
           </span>
           <span class="mt-2 font-medium text-center text-blue-600 dark:text-blue-500">Step 1</span>
         </li>
         <li class="flex flex-col items-center">
           <span class="flex items-center justify-center w-10 h-10 border-2 border-gray-500 rounded-full">
             2
           </span>
           <span class="mt-2 font-medium text-center text-gray-500 dark:text-gray-400">Step 2</span>
         </li>
         <li class="flex flex-col items-center">
           <span class="flex items-center justify-center w-10 h-10 border-2 border-gray-500 rounded-full">
             3
           </span>
           <span class="mt-2 font-medium text-center text-gray-500 dark:text-gray-400">Step 3</span>
         </li>
       </ol>
 
     <form wire:submit.prevent="register">
         @csrf
         <div class="relative">
            <input placeholder="Enter Your Last Name" wire:model="bytebuilder_name" type="text" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
          </div>
          @error('bytebuilder_name')
          <div class="text-red-500">{{$message}}</div>
         @enderror
          <div class="relative">
            <input placeholder="Enter Your First Name" wire:model="bytebuilder_prename" type="text" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
         </div>

         @error('bytebuilder_prename')
         <div class="text-red-500">{{$message}}</div>
        @enderror
        
 
          <div class="relative">
            <input placeholder="Enter Your Birthdate" wire:model="bytebuilder_birthdate" type="date" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
          </div>
          @error('bytebuilder_birthdate')
          <div class="text-red-500">{{$message}}</div>
         @enderror
 
      <div class="relative">
         <p class="flex items-center justify-center w-full pt-2 text-gray-600">
           <span class="border-b border-gray-300 w-1/4"></span>
           <span class="px-4">or</span>
           <span class="border-b border-gray-300 w-1/4"></span>
         </p>
       </div>
       <div class="relative">
         <a href="{{route('google-auth')}}" class="flex items-center justify-center w-full inline-block pt-3 pr-5 pb-3 pl-5 mt-4 text-xl font-medium text-center text-gray-800 bg-white border border-gray-300 rounded-lg transition duration-200 hover:bg-gray-200 ease">
           <img src="bytebuilders.png" class="h-6 mr-2" alt="Gmail Logo">
           Sign up with Gmail
         </a>
         <a href="{{route('github-auth')}}" class="flex items-center justify-center w-full inline-block pt-3 pr-5 pb-3 pl-5 mt-4 text-xl font-medium text-center text-gray-800 bg-whit border border-gray-300 rounded-lg transition duration-200 hover:bg-gray-200 ease">
           <img src="github.png" class="h-8 mr-2" alt="Gmail Logo">
           Sign up with GitHub
         </a>
      
     </div>
 
     @endif
 
     @if ($currentSteps == 2)
 
     {{--STEP 2--}} 
   
 
     <ol class="flex items-center justify-center w-full space-x-20 space-y-4 sm:flex sm:space-y-0">
      <li class="flex flex-col items-center">
        <span class="flex items-center justify-center w-10 h-10 border-2 border-blue-600 dark:border-blue-500 rounded-full bg-blue-600">
          1
        </span>
        <span class="mt-2 font-medium text-center text-blue-600 dark:text-blue-500">Step 1</span>
      </li>
      <li class="flex flex-col items-center">
        <span class="flex items-center justify-center w-10 h-10 border-2 border-blue-600 rounded-full bg-blue-600">
          2
        </span>
        <span class="mt-2 font-medium text-center text-blue-600 dark:text-blue-600">Step 2</span>
      </li>
      <li class="flex flex-col items-center">
        <span class="flex items-center justify-center w-10 h-10 border-2 border-gray-500 rounded-full">
          3
        </span>
        <span class="mt-2 font-medium text-center text-gray-500 dark:text-gray-400">Step 3</span>
      </li>
    </ol>
 
 
     <div class="relative">
       <input placeholder="Enter Your Email" wire:model="bytebuilder_email" type="email" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
     </div>

     @error('bytebuilder_email')
      <div class="text-red-500">{{$message}}</div>
     @enderror

     <div class="relative">
       <input placeholder="Enter Your City" wire:model="bytebuilder_city" type="text" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
     </div>

     @error('bytebuilder_city')
     <div class="text-red-500">{{$message}}</div>
    @enderror
 
     <div class="relative">
       <input placeholder="Enter Your Country" wire:model="bytebuilder_country" type="text" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
     </div>
     @error('bytebuilder_country')
     <div class="text-red-500">{{$message}}</div>
    @enderror
 
     @endif
     {{--STEP 3--}}
     @if($currentSteps == 3)
     @if (session('success'))
     <div class="alert alert-success" role="alert">
         {{ session('success') }}
     </div>
   @endif
     <ol class="flex items-center justify-center w-full space-x-20 space-y-4 sm:flex sm:space-y-0">
      <li class="flex flex-col items-center">
        <span class="flex items-center justify-center w-10 h-10 border-2 border-blue-600 dark:border-blue-500 rounded-full bg-blue-600">
          1
        </span>
        <span class="mt-2 font-medium text-center text-blue-600 dark:text-blue-500">Step 1</span>
      </li>
      <li class="flex flex-col items-center">
        <span class="flex items-center justify-center w-10 h-10 border-2 border-blue-600 rounded-full bg-blue-600">
          2
        </span>
        <span class="mt-2 font-medium text-center text-blue-600 dark:text-blue-400">Step 2</span>
      </li>
      <li class="flex flex-col items-center">
        <span class="flex items-center justify-center w-10 h-10 border-2 border-blue-500 rounded-full bg-blue-600">
          3
        </span>
        <span class="mt-2 font-medium text-center text-blue-600 dark:text-blue-400">Step 3</span>
      </li>
    </ol>
 
 
     <div class="relative">
         <input placeholder="***********" wire:model="bytebuilder_password" type="password" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
       </div>
       @error('bytebuilder_password')
       <div class="text-red-500">{{$message}}</div>
      @enderror
       <div class="relative">
         <input placeholder="***********" wire:model="bytebuilder_password_confirmation" type="password" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
       </div>
       @error('bytebuilder_password_confirmation')
       <div class="text-red-500">{{$message}}</div>
      @enderror
        
 
      <div>
         <select wire:model="bytebuilder_category" type="text" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-4 text-base block bg-[#F5F7F9] border-gray-300 rounded-md">
             <option value="">Select Your Category</option>   
             <option value="Technology">Technology</option>
             <option value="Designer">Designer</option>
             <option value="Developer">Developer</option>
         </select>
      </div>
      @error('bytebuilder_category')
       <div class="text-red-500">{{$message}}</div>
      @enderror
     
 
     @endif
 
 
     <div class="flex justify-between mt-4">
  @if ($currentSteps == 2 || $currentSteps == 3)
   <button type="button" wire:click="decreaseStep()" class="pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease">Back</button>
  @endif
 
  @if ($currentSteps == 1 || $currentSteps == 2)
 
    <button type="button" wire:click="increaseStep()" class="pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease">Next</button>
  @endif
 
  @if ($currentSteps == 3)
    <button type="submit" wire:click="register" class="pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease">Sign Up</button>
  @endif
</form>
 </div>
</div>
