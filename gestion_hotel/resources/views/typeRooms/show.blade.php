
@extends('components.layout')
@section('title',ucwords('modifier room'))
@section('content')
 
  <section class="px-6 py-8">
    <main class=" mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl  ">
      {{-- <h1 class=" text-center font-bold text-xl">Register!    </h1> --}}
      <form action="{{ route('typeRooms.update',$model->idTR) }}" method="post" class=""  >
      @csrf
      
      <div class="mb-6">
        <label for="type" class="block mb-2 uppercase font-bold text-xs text-gray-700">type</label>
        <input type="text" name="type"  id="type" value="{{ $model->type }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('type')
        @dd($errors)
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      
      <div class="mb-6">
        <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">description</label>
        <textarea type="text" name="description"  id="description"  class="border border-gray-400 rounded-lg hover:ring focus:outline-none  p-2 w-full">{{ $model->description }}</textarea>
        @error('description')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
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
    imgProfile.onclick=()=>{
      avatar.click()

    }
    avatar.onchange=()=>{
      const file = avatar.files[0];
      imgProfile.src = URL.createObjectURL(file);
    }
  </script>
  
@endsection