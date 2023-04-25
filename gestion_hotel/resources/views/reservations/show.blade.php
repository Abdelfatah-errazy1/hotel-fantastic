@extends('components.layout')
@section('title',ucwords('modier reservaion'))
@section('content')
{{-- @dd($collection) --}}
<section class="px-6 py-8">
  <main class=" mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl  ">
    {{-- <h1 class=" text-center font-bold text-xl">Register!    </h1> --}}
    <form action="{{ route('reservations.update',$model->idR) }}" method="post" class="grid grid-cols-6 gap-6"  >
    @csrf
    
    <div class="mb-1 md:mb-3 xl:mb-5  md:col-span-3 col-span-6">
      <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>
      <input required type="text" name="name"  id="name" value="{{ $model->name }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('name')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5  md:col-span-3 col-span-6">
      <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>
      <input required type="email" name="email"  id="email" value="{{ $model->email }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('email')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5 lg:col-span-2  md:col-span-3 col-span-6">
      <label for="phone" class="block mb-2 uppercase font-bold text-xs text-gray-700">phone</label>
      <input required  type="text" name="phone"  id="phone" value="{{ $model->phone }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('phone')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5 lg:col-span-2  md:col-span-3 col-span-6">
      <label for="nombreRoom" class="block mb-2 uppercase font-bold text-xs text-gray-700">nombre of Room</label>
      <input required type="number" name="nombreRoom"  id="nombreRoom" value="{{ $model->nombreRoom }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('nombreRoom')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5 lg:col-span-2  md:col-span-3 col-span-6">
      <label for="nombreAdults" class="block mb-2 uppercase font-bold text-xs text-gray-700">nombreAdults</label>
      <input required type="number" name="nombreAdults"  id="nombreAdults" value="{{ $model->nombreAdults }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('nombreAdults')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5 lg:col-span-2  md:col-span-3 col-span-6">
      <label for="dateReservation" class="block mb-2 uppercase font-bold text-xs text-gray-700">date de reservaion</label>
      <input required type="date" name="dateReservation"  id="dateReservation" value="{{ $model->dateReservation }}" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('+2 months')) }}"   class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
      @error('dateReservation')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5 lg:col-span-2  md:col-span-3 col-span-6">
      <label for="nombreJours" class="block mb-2 uppercase font-bold text-xs text-gray-700">nombreJours</label>
      <input required type="number" name="nombreJours"  id="nombreJours" value="{{ $model->nombreJours }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
    
      @error('nombreJours')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5 lg:col-span-2  md:col-span-3 col-span-6">
      <label for="typeRoom" class="block mb-2 uppercase font-bold text-xs text-gray-700">typeRoom</label>
      <select name="typeRoom"  id="typeRoom"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        
      
        @foreach (\App\Models\TypeRoom::all() as $item )
        <option 
        {{ $item->idTR ===$collection->typeRoom ?'selected':''  }}
        value="{{ $item->idTR }}">{{ $item->type }}</option>
        @endforeach
      </select>
      @error('typeRoom')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-1 md:mb-3 xl:mb-5   col-span-6 ">
      <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">message</label>
      <textarea type="text" name="message"  id="message"  class="border border-gray-400 rounded-lg hover:ring focus:outline-none  p-2 w-full">{{ $model->message }}</textarea>
      @error('message')
        <div class="my-2 text-red-600">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-1 md:mb-3 xl:mb-5  md:col-span-3 col-span-6">
      <x-submit-button class=" bg-blue-500 hover:bg-blue-600" >modifier</x-submit-button>
    </div>
  
    </form>
  </main>
</section>
@endsection