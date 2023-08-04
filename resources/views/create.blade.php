
@livewireStyles
<script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!-- component -->
<div class="bg-white relative min-h-screen max-h-screen">
  <div class="flex flex-col items-center justify-between pt-10 px-5 md:pt-2 md:flex-row">
    <div class="flex flex-col items-center w-full md:flex-row">
      <div class="absolute top-0 left-0 mt-4 ml-4">
        <a href="welcome1" > <img src="Group 39.png" class="h-12" alt="Brand Logo"></a> 
      </div>
      <div class="w-full bg-cover max-w-md h-80 md:max-w-2xl md:w-7/12">
        <div class="flex items-center justify-center w-full h-full">
          <img src="Saly-16.png" class="absolute bottom-0 w-[600px]"alt="Run Health" />
        </div>
      </div>
      <div class="w-full mt-10 md:mt-20 md:w-5/12 overflow-auto">
        <div class="flex flex-col items-start justify-start pt-2 pr-10 pb-10 pl-10">
          <p class="w-full text-4xl font-medium text-center">Sign up for an account</p>
         

          <div class="w-full mt-3 space-y-6">
            <div class="relative">
              


              
        @livewire('multi-step-form')

           
            <div class="relative">
              <p class="text-center mt-6">
                <span class="text-gray-500">Already have an account?</span>
                <a href="{{route('show')}}" class="text-blue-500 hover:text-blue-600 underline">Login</a>
              </p>
            </div>
       
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>