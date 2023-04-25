@extends('components.layout')
@section('title',ucwords('liste type rooms'))
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10 ">
  <table class="w-full text-sm text-left text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
          <tr>
              <th scope="col" class="px-6 py-3">
                  user
              </th>
              <th scope="col" class="px-6 py-3">
                  question
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
                  {{ $item->user }}
                </td>
                <td class="px-6 py-4">
                  {{ $item->question }}
                </td>
                
                <td class="px-6 py-4 text-right min-w-max w-[200px]">
                  <a href="{{ route('typeRooms.show',$item->idQ) }}" class="font-medium bg-green-600 p-2 rounded text-white hover:bg-green-500 hover:underline">Edit</a>
                  <a href="{{ route('typeRooms.delete',$item->idQ) }}" class="font-medium bg-red-600 p-2  rounded text-white hover:bg-red-500 hover:underline">delete</a>
                </td>
              </tr>
            @endforeach
        @endisset
        
      </tbody>
  </table>
</div>


@endsection