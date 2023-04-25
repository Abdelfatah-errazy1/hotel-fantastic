@extends('components.layout')
@section('title',ucwords('list reservation'))
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10 ">
  <table class="w-full text-sm text-left text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
          <tr>
              <th scope="col" class="px-6 py-3">
                  name
              </th>
              <th scope="col" class="px-6 py-3">
                  email
              </th>
              <th scope="col" class="px-6 py-3">
                  phone
              </th>
              <th scope="col" class="px-6 py-3">
                   room
              </th>
              <th scope="col" class="px-6 py-3">
                  date Reservation
              </th>
              <th scope="col" class="px-6 py-3">
                  message
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
                <td class="px-6 py-4">
                  {{ $item->email }}
                </td>
                <td class="px-6 py-4">
                  {{ $item->phone }}
                </td>
                <td class="px-6 py-4">
                  {{ $item->room }}
                </td>
               
                <td class="px-6 py-4">
                  {{ $item->dateReservation }}
                </td>
               
                <td class="px-6 py-4">
                  {{ $item->message }}
                </td>
                
                <td class="px-6 py-4 text-right min-w-max w-[200px]">
                  <a href="{{ route('reservations.show',$item->idR) }}" class="font-medium bg-green-600 p-2 rounded text-white hover:bg-green-500 hover:underline">Edit</a>
                  <a href="{{ route('reservations.delete',$item->idR) }}" class="font-medium bg-red-600 p-2  rounded text-white hover:bg-red-500 hover:underline">delete</a>
                </td>
              </tr>
            @endforeach
        @endisset
        
      </tbody>
  </table>
</div>
@endsection