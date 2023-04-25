<nav
id="sidenav"
class=" hidden lg:block  fixed z-50 left-0 top-0 h-full w-60 -translate-x-full overflow-hidden bg-gray-200 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0  "
data-te-sidenav-init
data-te-sidenav-hidden="false"
  data-te-sidenav-accordion="true">
  <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
    <x-sidebar-link class="h-12" href="">
      <span class=" h-10 w-10 ">
        <img src="{{ asset('assets/images/logo.png') }}" class="w-full h-full" height="10" width="10" alt="dd">
      </span>
      <span class="text-xl font-serif font-bold">Hotel Fantastic</span>
    </x-sidebar-link>
    <li class="relative" onclick="show('dropdownsidebarlinks')">
      <x-sidebar-link-1 class="h-12">

        <span class="text-lg  hover:font-medium">{{ ucwords('rooms') }}</span>
  
        @include('partials._dropdownSvg')
      </x-sidebar-link-1>
       
     
      <ul
      id="dropdownsidebarlinks"
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        
        <x-sidebar-link class="h-6 mb-2" href="{{ route('roomsAdmin.index') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords(' list rooms') }}</span>
      </x-sidebar-link>
      <x-sidebar-link class="h-6 mb-2" href="{{ route('roomsAdmin.create') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords('add new room') }}</span>
      </x-sidebar-link>
        </ul>
      </li>

    <li class="relative" onclick="show('dropdownsidebarlinks2')">
      <x-sidebar-link-1 class="h-12">

        <span class="text-lg  hover:font-medium">{{ ucwords('reservations') }}</span>
  
        @include('partials._dropdownSvg')
      </x-sidebar-link-1>
      <ul
      id="dropdownsidebarlinks2"
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        
        <x-sidebar-link class="h-6 mb-2" href="{{ route('reservations.index') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords(' list reservations') }}</span>
      </x-sidebar-link>
      <x-sidebar-link class="h-6 mb-2" href="{{ route('reservations.create') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords('add new reservation') }}</span>
      </x-sidebar-link>
        </ul>
      </li>
    <li class="relative" onclick="show('dropdownsidebarlinks3')">
      <x-sidebar-link-1 class="h-12">

        <span class="text-lg  hover:font-medium">{{ ucwords('users') }}</span>
  
        @include('partials._dropdownSvg')
      </x-sidebar-link-1>
      <ul
      id="dropdownsidebarlinks3"
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        
        <x-sidebar-link class="h-6 mb-2" href="">
          <span class="text-lg  hover:font-medium">{{ ucwords(' list users') }}</span>
      </x-sidebar-link>
      <x-sidebar-link class="h-6 mb-2" href="">
          <span class="text-lg  hover:font-medium">{{ ucwords('add new user') }}</span>
      </x-sidebar-link>
        </ul>
      </li>
    <li class="relative" onclick="show('dropdownsidebarlinks4')">
      <x-sidebar-link-1 class="h-12">

        <span class="text-lg  hover:font-medium">{{ ucwords('type rooms') }}</span>
  
        @include('partials._dropdownSvg')
      </x-sidebar-link-1>
      <ul
      id="dropdownsidebarlinks4"
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        
        <x-sidebar-link class="h-6 mb-2" href="{{ route('typeRooms.index') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords(' list type rooms') }}</span>
      </x-sidebar-link>
      <x-sidebar-link class="h-6 mb-2" href="{{ route('typeRooms.create') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords('add new type de room') }}</span>
      </x-sidebar-link>
        </ul>
      </li>
 
    <li class="relative" onclick="show('dropdownsidebarlinks5')">
      <x-sidebar-link-1 class="h-12">

        <span class="text-lg  hover:font-medium">{{ ucwords('messages') }}</span>
  
        @include('partials._dropdownSvg')
      </x-sidebar-link-1>
       
     
      <ul
      id="dropdownsidebarlinks5"
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        
        <x-sidebar-link class="h-6 mb-2" href="{{ route('roomsAdmin.index') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords(' list messages') }}</span>
      </x-sidebar-link>
      <x-sidebar-link class="h-6 mb-2" href="{{ route('roomsAdmin.create') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords('add new room') }}</span>
      </x-sidebar-link>
        </ul>
      </li>

    <li class="relative"  onclick="show('dropdownsidebarlinks6')">
      <x-sidebar-link-1 class="h-12">

        <span class="text-lg  hover:font-medium">{{ ucwords('questions') }}</span>
  
        @include('partials._dropdownSvg')
      </x-sidebar-link-1>
      <ul
      id="dropdownsidebarlinks6"
        class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
        data-te-sidenav-collapse-ref>
        
        <x-sidebar-link class="h-6 mb-2" href="{{ route('reservations.index') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords(' list questions') }}</span>
      </x-sidebar-link>
      <x-sidebar-link class="h-6 mb-2" href="{{ route('questions.create') }}">
          <span class="text-lg  hover:font-medium">{{ ucwords('add new question') }}</span>
      </x-sidebar-link>
        </ul>
      </li>
    </ul>
  <hr class="my-4" />
</nav>


