@extends('components.layout')
@section('title',ucwords('galary'))
@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4 m-10 ">
  @foreach ($collection as $item )
  <a href="{{ route('rooms.show',$item->room) }}">
  
    <img
    data-te-animation-init
    data-te-animation-start="onScroll"
    data-te-animation="[fade-in_1s_ease-in-out]"
    src="{{ asset($item->img)  }}" 
    class="rounded-md" />
  </a>
  @endforeach

</div>

@endsection
@section('scripts')
<script>

  // Initialization for ES Users
  import {
    Animate,
    initTE,
  } from "tw-elements";
  
  initTE({ Animate });
</script>
  
@endsection