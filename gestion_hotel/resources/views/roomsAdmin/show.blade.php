
@extends('components.layout')

@section('title',ucwords('modifier room'))
@section('content')
<div class="max-w-2xl mx-auto">
 
  <!-- Modal toggle -->
  {{-- @dd($collection) --}}

  <!-- Main modal -->
  <div id="modalshow" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-96  md:inset-0 z-50 justify-center items-center">
      <div class="relative w-full max-w-xl px-4 h-full md:h-auto">
          <!-- Modal content -->
          <div class="bg-white rounded-lg shadow relative d">
              <div class="flex justify-end p-2">
                 
                <x-btn-close-svg class=" right-0 absolute top-0 " id="btnmodaldelete" />
              </div>
              

              <form class="m-5" action="{{ route('imageRooms.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="m-5 p-5">
  
                  <div class="lg:ml-4 flex items-center justify-center lg:mb-0 mb-4">
                    <img class="rounded-full w-20 h-20 border-2 border-transparent hover:border-indigo-400   cursor-pointer" id="imgProfile" src="{{ asset('assets/images/empty.jpg')  }}" alt=" ">
                   
                  </div>
                  <input type="file" hidden name="img"  id="img" value="{{ old('img') }}" class="border border-gray-400 p-2 w-full">
                  <input type="text" hidden name="room"  id="room" value="{{ $model->idRoom }}" class="border border-gray-400 p-2 w-full">
                  @error('img')
                    <div class="my-2 text-red-600">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-6 ">
                  <label for="titre" class="block mb-2 uppercase font-bold text-xs text-gray-700">titre</label>
                  <input type="text" name="titre"  id="titre" value="{{ old('titre') }}" accept=".jpg , .jpeg , .png" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
                  @error('titre')
                    <div class="my-2 text-red-600">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              <x-submit-button class=" bg-blue-500 hover:bg-blue-600 mr-5" >ajouter</x-submit-button>

              </form>
          </div>
      </div>
  </div> 
</div>
  <section class="px-6 py-8">
    <main class=" mx-auto mt-6   bg-gray-50 border border-gray-200 p-10 rounded-xl  ">
      {{-- <h1 class=" text-center font-bold text-xl">Register!    </h1> --}}
      <form action="{{ route('roomsAdmin.update',$model->idRoom) }}" method="post" class="grid grid-cols-2 gap-4"  >
      @csrf
      
      <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>
        <input type="text" name="name"  id="name" value="{{ $model->name }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('name')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="size" class="block mb-2 uppercase font-bold text-xs text-gray-700">size</label>
        <input type="number" name="size"  id="size" value="{{ $model->size }}" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
        @error('size')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="capacity" class="block mb-2 uppercase font-bold text-xs text-gray-700">capacity</label>
        <input type="number" name="capacity"  id="capacity" value="{{ $model->capacity  }}"  class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
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
            
          <option 
          {{ $item->idTR ===$model->typeRoom ?'selected':''  }}
          value="{{ $item->idTR }}">{{ $item->type }}</option>
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
        <textarea type="text" name="description"  id="description"  class="border border-gray-400 rounded-lg hover:ring focus:outline-none  p-2 w-full">{{ $model->description }}</textarea>
        @error('description')
          <div class="my-2 text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-6  ">
        <x-submit-button class=" bg-green-500 hover:bg-green-600 mr-5" >modifier</x-submit-button>
        <a id="modalbtn" class="uppercase font-bold border border-gray-500 py-1 my-5 px-6   rounded-3xl text-white bg-blue-500 hover:bg-blue-600 mr-5 cursor-pointer" >Add Image</a>
      </div>
      
       
   
      </form>
      <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    titre
                </th>
                <th scope="col" class="px-6 py-3">
                    image
                </th>
                <th scope="col" class="px-6 py-3">
                    actions
                </th>
                
            </tr>
        </thead>
        <tbody>
          @isset($collection)
              @foreach ($collection as $item )
                {{-- {{ dump($item) }} --}}
                <tr class="bg-white border-b  hover:bg-gray-100 ">
                  
                  <td class="px-6 py-4">
                    {{ $item->titre }}
                  </td>
                  <td class="px-6 py-4">
                    
                    <img src="{{ asset($item->img) }}" class="rounded" height="40" width="40" alt="">
                  </td>
                  
                  <td class="px-6 py-4 text-right">
                    <a href="{{ route('imageRooms.delete',$item->idIR) }}" onclick="confirme(event)" class="font-medium bg-red-600 p-2  rounded text-white hover:bg-red-500 hover:underline">delete</a>
                  </td>
                </tr>
              @endforeach
          @endisset
          
        </tbody>
    </table>
    </main>
  </section>
@endsection
@section('scripts')
  <script>
    var modalbtn=document.getElementById('modalbtn')
    var btnmodaldelete=document.getElementById('btnmodaldelete')
  var modalshow=document.getElementById('modalshow')
  modalbtn.onclick=()=>modalshow.classList.remove("hidden")
  btnmodaldelete.onclick=()=>modalshow.classList.add("hidden")

    var img=document.getElementById('img')
    var imgProfile=document.getElementById('imgProfile')
    imgProfile.onclick=()=>{
      img.click()

    }
    img.onchange=()=>{
      const file = img.files[0];
      imgProfile.src = URL.createObjectURL(file);
    }
  </script>
  
@endsection