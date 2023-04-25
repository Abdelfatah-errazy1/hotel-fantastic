@extends('components.layout')
@section('title','profil')
@section('content')
  <style>
    /* .abdelfatah{
      left: 42%;
    } */


 
    @media (max-width: 1536px) {
  .abdelfatah {
    left: 44%;
  }}
  
  @media (max-width: 1280px) {
  .abdelfatah {
    left: 4%;
  }}
  @media (max-width: 1024px) {
  .abdelfatah {
    left: 42%;
  }}
  @media (max-width: 768px) {
  .abdelfatah {
    left: 37%;
  }}
  @media (max-width: 648px) {
  .abdelfatah {
    left: 30%;
  }}
  </style>
  
    <main class="profile-page mt-10">
      <section class="relative  mx-2 " style="height: 500px;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover rounded-xl"
          style='background-image:url({{ asset('assets/images/photos/banner.jpg') }});'
        >
       
        </div>
        
      </section>
      <div class="relative z-50 ">
        <img
        id="imgProfilea"
          alt="..."
          width="100"
          height="100"
          src="{{ isset(auth()->user()->avatar)?asset(auth()->user()->avatar):asset('assets/images/profil.png') }}"
          class=" cursor-pointer rounded-full w-96 h-96 max-w-[96px] border-2 border-transparent hover:border-indigo-400 absolute top-[-265px] abdelfatah  "
          style="max-width: 170px;max-height:170px;"
        />
        <input type="file" hidden name="avatar" id="avatara">
      </div>

      <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
          <div
            class="relative flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl z-30 bg-gray-100 rounded-lg -mt-64"
          >
            <div class="px-6">
              <div class="flex flex-wrap justify-center ">
                <div
                  class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center "
                >
                
                </div>
                <div
                  class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                >
                  <div class="py-6 px-3 mt-32 sm:mt-0">
                    <button
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                      type="button"
                      style="transition: all 0.15s ease 0s;"
                    >
                      Connect
                    </button>
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >22</span
                      ><span class="text-sm text-gray-500">reservations</span>
                    </div>
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >10</span
                      ><span class="text-sm text-gray-500">questions</span>
                    </div>
                    <div class="lg:mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >89</span
                      ><span class="text-sm text-gray-500">messages</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-12">
                <h3
                  class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                >
                {{ auth()->user()->name }}
                </h3>
                <div
                  class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                >
                  <i
                    class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                  ></i>
                  Los Angeles, California
                </div>
                <div class="mb-2 text-gray-700 mt-10">
                  <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                  >Solution Manager - Creative Tim Officer
                </div>
                <div class="mb-2 text-gray-700">
                  <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                  >University of Computer Science
                </div>
              </div>
              <div class="mt-10 py-10 border-t border-gray-300 text-center">
                <div class="flex flex-wrap justify-center">
                  <div class="w-full lg:w-9/12 px-4">
                  
                    <a href="#pablo" class="font-normal text-pink-500"
                      >Show more</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection
@section('scripts')
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    var avatara=document.getElementById('avatara')
    var imgProfilea=document.getElementById('imgProfilea')
    console.log(avatara
    );
    imgProfilea.onclick=()=>{
      avatara.click()

    }
    avatara.onchange=()=>{
      const file = avatara.files[0];
      imgProfilea.src = URL.createObjectURL(file);
    }
  </script>
  
@endsection