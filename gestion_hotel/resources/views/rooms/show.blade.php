@extends('components.layout')
@section('title',ucwords('room and her tarif'))
@section('content')
<div class="max-w-2xl mx-auto relative">
    <div id="modalshow" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-96  md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-xl px-4 h-full md:h-auto">
            <div class="bg-white rounded-lg shadow relative ">
                <div class="flex justify-end p-2">
                 
                    <x-btn-close-svg class="  " id="btnmodaldelete" />
                  </div>
                <form class="m-5" action="{{ route('questions.store') }}" method="post" enctype="multipart/form-data" >
                  @csrf
                  <div class="mb-4 ">
                    <label for="question" class="block mb-2 uppercase font-bold text-xs text-gray-700">poser un question </label>
                    <input type="text" name="question"  id="question" value="{{ old('question') }}" accept=".jpg , .jpeg , .png" class="border border-gray-400 p-2 rounded-lg hover:ring focus:outline-none w-full">
                    @error('question')
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
 <div class="    ">
    <div class="m-5  ">
      <div class=" border  border-gray-100 p-8 rounded-xl bg-amber-100 flex gap-4" >
        <div class="flex  justify-center relative space-y-3">
            <div class="relative max-w-4xl lg:w-[700px] lg:h-[505px]  mx-auto ">
              
                @isset($collection)
                {{-- @dd($collection) --}}
                @foreach ($collection as $item )
                <div class="slide relative">
                    <img class="w-full h-[500px] object-cover rounded"
                        src="{{ asset($item->img)  }}" >
                    <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">{{ $item->titre }}</div>
                </div>
                @endforeach
                @endisset
                <div class="slide relative">
                    <img class="w-full h-[500px] object-cover"
                        src="{{ asset('assets/images/photos/H3.jpg')  }}" >
                    <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower One Caption</div>
                </div>
        
               
        
                <!-- The previous button -->
                <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                    onclick="moveSlide(-1)">❮</a>
        
                <!-- The next button -->
                <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                    onclick="moveSlide(1)">❯</a>
        
            </div>
            <br>
        
            <!-- The dots -->
            <div class="flex  justify-center items-center space-x-5  absolute bottom-[-14px]">
                @isset($collection)
                {{-- @dd($collection) --}}
                @foreach ($collection as $index =>$value)
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide({{$index+1  }})"></div>
                @endforeach
                @endisset
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
            </div>
        
            <!-- Javascript code -->
           

        </div>
        <div class="flex flex-col justify-start p-6 m-3">
            <h3 class="mb-2 text-xl font-medium text-neutral-800  ">{{ $model->name }}</h3>
            <p class="mb-4 " style="color: darkgreen;">type of room is <strong> {{ $model->type }}</strong></p>
            <p class="mb-4 " style="color: darkgreen;"> {{ $model->capacity }} persones</p>
            <p class="mb-4 " style="color: darkgreen;"> {{ $model->price }}$ for night</p>
            <p class="mb-4 "> {{ $model->description }}</p>
            <h3>Common Facilities</h3>    
            <ul  class="list-disc ml-10 mb-4 text-base text-neutral-600 ">
                <li>Television with more than 400 channels.</li>
                <li>Attached bathroom with bath-tub.</li>
                <li>Wide balcony towards beautiful garden.</li>
                <li>House keeping 3 times per day.</li>
                <li>24 hours water supply.</li>
            </ul>
            <div  class="grid grid-cols-3">
                <x-button-link href="{{ route('reservations.create',$model->typeRoom) }}" class="bg-amber-400 hover:bg-amber-600 max-w-20 ">reserver</x-button-link>
                @if (isset(auth()->user()->is_admin))
                @if (auth()->user()->is_admin)
                
                
                <x-button-link href="{{ route('roomsAdmin.show',$model->idRoom) }}" class="bg-green-500 mx-1">modifier</x-button-link>
                <x-button-link href="{{ route('roomsAdmin.delete',$model->idRoom)  }}" onclick="confirme(event)" class="bg-red-500 mx-1">supprimer</x-button-link>
                @endif
                
                @endif
            </div>
            
        </div>
    </div>
</div>
<div class="flex justify-center items-center">
  <a id="modalbtn" class="uppercase font-bold border border-gray-500 py-1 my-5 px-6   rounded-3xl text-white bg-blue-500 hover:bg-blue-600 mr-5" >poser un question sur nous</a>
  <x-button-link  class="bg-blue-700 mx-1">les frequent asked questions FAQ</x-button-link>

</div>
        @include('partials._pricing')

  </div>
  
  @endsection
 
  @section('scripts')
  <script>
    // set the default active slide to the first one
    let slideIndex = 1;
    showSlide(slideIndex);

    // change slide with the prev/next button
    function moveSlide(moveStep) {
        showSlide(slideIndex += moveStep);
    }

    // change slide with the dots
    function currentSlide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        let i;
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName('dot');
        
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        // hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
        }

        // remove active status from all dots
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove('bg-yellow-500');
            dots[i].classList.add('bg-green-600');
        }

        // show the active slide
        slides[slideIndex - 1].classList.remove('hidden');

        // highlight the active dot
        dots[slideIndex - 1].classList.remove('bg-green-600');
        dots[slideIndex - 1].classList.add('bg-yellow-500');
    }
</script>
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