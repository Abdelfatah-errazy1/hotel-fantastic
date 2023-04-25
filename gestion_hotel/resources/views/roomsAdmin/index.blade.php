@extends('components.layout')
@section('title',ucwords('liste rooms'))
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10 min-w-sm">
  <table class="w-full text-sm text-left text-gray-500  ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
          <tr>
              <th scope="col" class="px-6 py-3  ">
                  name
              </th>
              <th scope="col" class="px-6 py-3">
                  disponible
              </th>
              <th scope="col" class="px-6 py-3 hidden lg:block">
                  size
              </th>
              <th scope="col" class="px-6 py-3 hidden lg:block">
                  capacity
              </th>
              <th scope="col" class="px-6 py-3">
                  type room
              </th>
              <th scope="col" class="px-6 py-3 hidden xl:block">
                  description
              </th>
              <th scope="col" class="px-6 py-3">
                  actions
              </th>
              
          </tr>
      </thead>
      <tbody>
        @isset($collection)
            @foreach ($collection as $item )
              
              <tr class="bg-white border-b  hover:bg-gray-100 ">
                
                <td class="px-6 py-4">
                  {{ $item->name }}
                </td>
                <td class="px-6 py-4 font-semibold {{ $item->is_disponible?'text-green-500': 'text-red-500' }}">
                  {{ $item->is_disponible?'oui': 'non' }}
                </td>
                <td class="px-6 py-4 hidden lg:block">
                  {{ $item->size }}
                </td>
                <td class="px-6 py-4 hidden lg:block">
                  {{ $item->capcity }}
                </td>
                <td class="px-6 py-4">
                  {{ $item->typeRoom }}
                </td>
               
                <td class="px-6 py-4 hidden xl:block">
                  {{ $item->description }}
                </td>
                
                <td class="px-6 py-4 text-right min-w-max w-[200px]">
                  <a href="{{ route('roomsAdmin.show',$item->idRoom) }}" class="font-medium bg-green-600 p-2 my-2 rounded text-white hover:bg-green-500 hover:underline">Edit</a>
                  <a href="{{ route('roomsAdmin.delete',$item->idRoom) }}" onclick="confirme(event)" class="font-medium bg-red-600 p-2 my-2 rounded text-white hover:bg-red-500 hover:underline">delete</a>
                </td>
              </tr>
            @endforeach
        @endisset
        
      </tbody>
  </table>
</div>


@endsection