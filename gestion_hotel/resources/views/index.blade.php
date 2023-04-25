@extends('components.layout')
@section('title',ucwords('home'))
@section('content')

<!-- Container for demo purpose -->
<div class="container my-16 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32">

    <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-xl" 
    style="background-position: 50%; background-image: url({{ asset('assets/images/photos/banner.jpg') }}); height: 600px;">
  
  
    <div class="container mx-auto px-6 md:px-12 xl:px-32 absolute bottom-0 z-20 ">
      <div class="text-center text-gray-50">
        <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: -170px; background: hsla(0, 0%, 10%, 0.1); backdrop-filter: blur(1px);">
          <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">The best hotel in morocco <br /><span class="text-amber-600">for your confort</span></h1>
          <a 
          class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-amber-600
           text-white font-medium text-sm leading-snug uppercase rounded shadow-md
            hover:bg-amber-700 hover:shadow-lg focus:bg-amber-700 focus:shadow-lg
             focus:outline-none focus:ring-0 active:bg-amber-800 active:shadow-lg
              transition duration-150 ease-in-out" 
              data-mdb-ripple="true" data-mdb-ripple-color="light"
               href="/about" role="button">Introduction </a>
          <a class="inline-block px-7 py-3  font-medium text-sm leading-snug bg-gray-200
           text-amber-600 
            uppercase rounded hover:text-amber-700 hover:bg-gray-400
             focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200
              transition duration-50 ease-in-out" 
              id="reserve"
              data-mdb-ripple="true" data-mdb-ripple-color="light"
               href="{{ route('reservations.create') }}" role="button">reservation</a>
        </div>
        
      </div>
    </div>
  
  </div>


   

  </section>
  <!-- Section: Design Block -->

</div>

<!-- Container for demo purpose -->
@endsection
@section('scripts')
<script>
  // var dropid=document.getElementById('dropdownid')
    var reserve=document.getElementById('reserve')
    reserve.onclick=(e)=>{
      e.preventDefault()
      reservationLink.click()
    }
</script>
@endsection