
@extends('components.layout')
@section('title',ucwords('create room'))
@section('content')
 
  <section class="px-6 py-8">
    <main class=" mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl  ">
      {{-- <h1 class=" text-center font-bold text-xl">Register!    </h1> --}}
      <form action="{{ route('roomsAdmin.store') }}" method="post" class="grid grid-cols-2 gap-6"  >
      @csrf
      
      <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>
        <input type="text" name="name"  id="name" value="{{ old('name') }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('name')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="size" class="block mb-2 uppercase font-bold text-xs text-gray-700">size</label>
        <input type="number" name="size"  id="size" value="{{ old('size') }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('size')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="capacity" class="block mb-2 uppercase font-bold text-xs text-gray-700">capacity</label>
        <input type="number" name="capacity"  id="capacity" value="{{ old('capacity') }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('capacity')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="typeRoom" class="block mb-2 uppercase font-bold text-xs text-gray-700">typeRoom</label>
        <select name="typeRoom"  id="typeRoom"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
          
          @foreach (\App\Models\TypeRoom::all() as $item )
            
          <option value="{{ $item->idTR }}">{{ $item->type }}</option>
          @endforeach
        </select>
        @error('typeRoom')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      
      <div class="mb-6 col-span-2">
        <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">description</label>
        <textarea type="text" name="description"  id="description"  class="border border-gray-400 rounded-lg hover:ring focus:outline-none  p-2 w-full">{{ old('description') }}</textarea>
        @error('description')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
        <x-submit-button class=" bg-blue-500 hover:bg-blue-600" >ajouter</x-submit-button>
      </div>
    
      </form>
    </main>
  </section>
@endsection
