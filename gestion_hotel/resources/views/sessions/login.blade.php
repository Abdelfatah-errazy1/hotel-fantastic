

@extends('components.layout')
@section('title',ucwords('login'))
@section('content')

<section class="px-6 py-8">
  <main class="max-w-2xl mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl  ">
    <h1 class=" text-center font-bold text-xl">Login!    </h1>
    <form action="{{ route('login.store') }}" method="post" class="" >
    @csrf
  

    <div class="mb-6">
      <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>
      <input type="email" name="email"  id="email" value="{{ old('email') }}"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('email')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
      <input type="password" name="password"  id="password"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('password')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="flex justify-between items-center mb-4">
      <div>
          <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox text-indigo-600">
              <span class="mx-2 text-gray-600 text-sm">Remember me</span>
          </label>
      </div>
      
      <div>
          <a class="block text-sm fontme text-indigo-700 hover:underline" href="#">Forgot your password?</a>
      </div>
  </div>

    <div class="mb-6">
      <x-submit-button class=" bg-blue-500 hover:bg-blue-600" >login</x-submit-button>
    </div>
  
    </form>
  </main>
</section>
@endsection