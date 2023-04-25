
@extends('components.layout')
@section('title',ucwords('register'))
@section('content')
 
  <section class="px-6 py-8">
    <main class="max-w-3xl mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl  ">
      <h1 class=" text-center font-bold text-xl">Register!    </h1>
      <form action="{{ route('register.store') }}" method="post" class="grid grid-cols-2 gap-10"  enctype="multipart/form-data" >
      @csrf
      <div class="mb-6 col-span-2">
        
        <div class="lg:ml-4 flex items-center justify-center lg:mb-0 mb-4">
          <label for="avatar">
          <img class="rounded-full w-20 h-20 border-2 border-transparent hover:border-indigo-400   cursor-pointer" id="imgProfile" src="{{ asset('assets/images/profil.png')  }}" alt=" ">
        </label>
        </div>
        <input type="file" hidden name="avatar"  id="avatar" value="{{ old('avatar') }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('avatar')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6 lg:col-span-1 col-span-2">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>
        <input type="text" name="name"  id="name" value="{{ old('name') }}" accept=".jpg , .jpeg , .png" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('name')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6 lg:col-span-1 col-span-2">
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">username</label>
        <input type="text" name="username"  id="username" value="{{ old('username') }}"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('username')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6 lg:col-span-1 col-span-2">
        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>
        <input type="email" name="email"  id="email" value="{{ old('email') }}"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('email')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6 lg:col-span-1 col-span-2">
        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
        <input type="password" name="password"  id="password"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('password')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6 flex justify-start  items-center  col-span-2 ">
        <input type="checkbox" name="remember"  id="remember"  class="border mr-3 border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none ">
        <label for="remember" class=" p-2">remember</label>
       
      </div>
      <div class="mb-6  col-span-2">
        <x-submit-button class=" bg-blue-500 hover:bg-blue-600" >register</x-submit-button>
      </div>
    
      </form>
    </main>
  </section>
@endsection
@section('scripts')
  <script>
    var avatar=document.getElementById('avatar')
    var imgProfile=document.getElementById('imgProfile')
    avatar.onchange=()=>{
      const file = avatar.files[0];
      imgProfile.src = URL.createObjectURL(file);
    }
  </script>
  
@endsection