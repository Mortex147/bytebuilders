<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="app.css">
<!-- component -->
<div class="bg-white min-h-screen flex items-center justify-center">
  <div class="w-full md:w-5/12 overflow-y-auto">
    <div class="flex flex-col items-start justify-start pt-10 pr-10 pb-10 pl-10 bg-white shadow-2xl rounded-xl">
      <p class="w-full text-4xl font-medium text-center">Reset password</p>

      <div class="w-full mt-6 space-y-8">
        <form action="{{ route('reset.password.post')}}" method="POST" class="w-full mt-6 space-y-8">
          @csrf

          @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif
         
          @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
         @endif

          <input type="text" name="token" hidden value="{{$token}}">
          <div class="relative">
            <input placeholder="Enter Your Email" name="bytebuilder_email" type="email" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-2 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
          </div>
          @error('bytebuilder_email')
          <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror

          <div class="relative">
            <input placeholder="***********" name="bytebuilder_password" type="password" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-2 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
          </div>
          @error('bytebuilder_password')
          <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror
          <div class="relative">
            <input placeholder="***********" name="bytebuilder_password_confirmation" type="password" class="border placeholder-gray-400 focus:outline-none focus:border-black w-full pt-3 pr-4 pb-3 pl-4 mt-2 text-base block bg-[#F5F7F9] border-gray-300 rounded-md"/>
          </div>
          @error('bytebuilder_password_confirmation')
          <div class="text-red-500 mt-1">{{ $message }}</div>
        @enderror

          <div class="relative">
            <button type="submit" class="w-full inline-block pt-3 pr-5 pb-3 pl-5 mb-6 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease">Submit</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>