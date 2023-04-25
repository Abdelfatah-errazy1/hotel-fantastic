{{-- @dd(session('id')) --}}
<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-2 py-2">
  @if (isset(auth()->user()->is_admin))
    @if (auth()->user()->is_admin)  
  <x-button-header-svg  class=" " onclick="show('dd',['hidden','lg:block']);show('sidenav');show('layout',['lg:col-span-12','lg:col-span-9','xl:col-span-10']);show('btntoggler',['lg:px-1'])" />

  
@endif
@endif
  <div class="flex-1 mx-5 lg:mx-0  flex justify-between items-center">
    <a href="{{ route('about') }}">
      <img src="{{ asset('assets/images/logo.png') }}" alt="">
    </a>
  </div>

  <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
  <input class="hidden" type="checkbox" id="menu-toggle" onclick="show('menu')" />

  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="lg:flex  items-center justify-between text-base text-gray-700 pt-4 lg:pt-0 ">
        <x-nav-link href="{{ url('/') }}" >Home</x-nav-link>
        <x-nav-link href="{{ route('rooms.index') }}" >Rooms &amp; Tariff</x-nav-link>
        
        <x-nav-link href="{{ route('rooms.galary') }}" >Gallery</x-nav-link>
        <x-nav-link href="{{ route('about') }}" >About Us</x-nav-link>

        
         {{-- @dd( auth()->user()) --}}
         <!-- Second dropdown trigger -->
         @if (session("current_user"))
         <div class="relative" data-te-dropdown-ref>
          
           <x-nav-link  class=" cursor-pointer" onclick="show('reservationId')" id="reservationLink">reservation</x-nav-link>
           <!-- Second dropdown menu -->
           <ul
             class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden  min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
           id="reservationId">
             <!-- Second dropdown menu items -->
          
             <x-profil-link class="text-green-500" href="{{ route('reservations.show',session('id')) }}">modifier</x-profil-link>
             <x-profil-link class="text-red-500" href="{{ route('reservations.delete',session('id')) }}">supperimer</x-profil-link>
             
           </ul>
         </div>
        @else
          
        <x-nav-link id="reservationLink" href="{{ route('reservations.create') }}" >reservation</x-nav-link>
        @endif

        @guest

        <x-nav-link href="{{ route('login.create') }}" class="lg:mb-0 mb-2 text-blue-500">login</x-nav-link>
        <x-nav-link href="{{ route('register.create') }}" class="lg:mb-0 mb-2">register</x-nav-link>
        @endguest
        
      </ul>
    </nav>
    @auth
      {{-- @dd( auth()->user()) --}}
      <div class="relative" data-te-dropdown-ref>
        <!-- Second dropdown trigger -->
        <a
        class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor"
        href="#">
          <!-- User avatar -->
          <img
          src="{{isset(auth()->user()->avatar) ?asset( auth()->user()->avatar):asset('assets/images/profil.png')  }} "
          class="rounded-full w-10 h-10 border-2 border-transparent hover:border-indigo-400" 
            onclick='show("dropdownid")'
            alt=""
            loading="lazy" />
        </a>
        <!-- Second dropdown menu -->
        <ul
          class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden  min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
        id="dropdownid">
          <!-- Second dropdown menu items -->
          <x-profil-link href="/profil">profil</x-profil-link>
          <x-profil-link href="{{ route('login.destroy') }}">log out</x-profil-link>
          <x-profil-link href="{{ route('login.new') }}">login another account</x-profil-link>
          
        </ul>
      </div>
   
    @endauth

  </div>

</header>

