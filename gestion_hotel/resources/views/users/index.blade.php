@extends('components.layout')
@section('title',ucwords('liste rooms'))
@section('content')
{{-- @dd($collection).;/'' --}}
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10 ">
  
  <table class="w-full text-sm text-left text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
          <tr>
              <th scope="col" class="px-6 py-3">
                  name
              </th>
              <th scope="col" class="px-6 py-3">
                  avatar
              </th>
              <th scope="col" class="px-6 py-3">
                  username
              </th>
              <th scope="col" class="px-6 py-3">
                  email
              </th>
              <th scope="col" class="px-6 py-3">
                  admin
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
                 <img src="{{ ($item->avatar) ? asset($item->avatar) :asset('assets/images/empty.jpg')}}" width="40" height="40" class='rounded' alt="">
                </td>
                <td class="px-6 py-4">
                  {{ $item->username }}
                </td>
                <td class="px-6 py-4">
                  {{ $item->email }}
                </td>
                
               
                
                <td class="px-6 py-4 font-semibold ">
                  <span class="text-white  font-medium p-2 rounded {{ $item->is_admin?'bg-green-500': 'bg-red-500' }}">

                    {{ $item->is_admin?'oui': 'non' }}
                  </span>
                </td>
                <td class="px-6 py-4 text-right min-w-max w-[200px]">
                  <a href="{{ route('roomsAdmin.show',$item->id) }}" class="font-medium bg-green-600 p-2 rounded text-white hover:bg-green-500 hover:underline">Edit</a>
                  <a href="{{ route('roomsAdmin.delete',$item->id) }}" onclick="confirme(event)" class="font-medium bg-red-600 p-2  rounded text-white hover:bg-red-500 hover:underline">delete</a>
                </td>
              </tr>
            @endforeach
        @endisset
        
      </tbody>
  </table>
</div>


@endsection