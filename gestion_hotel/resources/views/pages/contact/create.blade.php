@extends('components.layout')
@section('title',ucwords('contact us'))
@section('content')
<div class="max-w-2xl m-32 mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl   ">
  <form action="{{ route('contactUs.store') }}"  method="post">
    @csrf
    <div class="flex items-center p-4 m-4  ">
      <label class="  mr-10  font-bold text-gray-800 " for="name" > name</label>
      <input type="text" name="name" class=" outline-0 border border-gray-100 p-2 w-96 rounded-md"  value="{{ auth()->user()?auth()->user()->name:'' }}" placeholder="name" id="name">
    </div>
    <div class="flex items-center p-4 m-4  ">
      <label class="  mr-10  font-bold text-gray-800 " for="email" > email</label>
      <input type="text" name="email" class=" outline-0 border border-gray-100 p-2 w-96 rounded-md" value="{{ auth()->user()?auth()->user()->email:'' }}" placeholder="email" id="name">
    </div>
    <div class="flex items-center p-4 m-4  ">
      <label class="  mr-8 font-bold text-gray-800 " for="phone" > phone</label>
      <input type="text" name="phone" class=" outline-0 border border-gray-100 p-2 w-96 rounded-md" placeholder="phone" id="name">
    </div>
    <div class="flex items-center p-4 m-4  ">
      <label class="  mr-4  font-bold text-gray-800 " for="message" > message</label>
      <textarea name="message" class=" outline-0 border border-gray-100 p-3 w-96 rounded-md" rows="3" placeholder="message" id="name"></textarea>
    </div>
    <button type="submit" class="uppercase font-bold border border-gray-500 py-1 px-6 bg-blue-500   rounded-3xl text-white">
      envoyer
    </button>
    
 
  
  </form>
  </div>
  @endsection