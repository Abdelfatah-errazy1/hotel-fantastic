@extends('components.layout')
@section('title',ucwords('rooms and tarifs'))
@section('content')
 <div class=" grid grid-cols-1 {{ isset(auth()->user()->is_admin)?'xl:grid-cols-2':'xl:grid-cols-3 md:grid-cols-2' }}     justify-between relative mx-10">
   @isset($collection)
   
   @foreach ($collection as $item )
   {{-- {{ dump($item->imgs) }} --}}
    <div class="max-w-5xl  m-5  ">
      <div class=" border border-gray-100 p-3 rounded-xl bg-amber-100">
          <img src="{{ asset($item->img)  }}"  class="rounded-md">
          <div class=" m-3">
              <h1 class="font-bold text-xl ">{{ $item->name }}</h1>
              <div class="flex justify-between ">

                <h3 class="font-bold ">{{ $item->capacity }} personnes</h3>
              <p class="mb-4 text-xl " > {{ $item->price }}$ for night</p>
              </div>
              <x-button-link href="{{ route('rooms.show',$item->idRoom) }}"  class="bg-amber-500 mx-1">check details</x-button-link>
            
              @if (isset(auth()->user()->is_admin))
              @if (auth()->user()->is_admin)
                
          
              <x-button-link href="{{ route('roomsAdmin.show',$item->idRoom) }}" class="bg-green-500 mx-1">modifier</x-button-link>
              <x-button-link href="{{ route('roomsAdmin.delete',$item->idRoom)  }}" onclick="confirme(event)" class="bg-red-500 mx-1">supprimer</x-button-link>
              @endif
                
              @endif
              
          </div>
      </div>
    </div>
  @endforeach
  @endisset
</div>
@endsection
