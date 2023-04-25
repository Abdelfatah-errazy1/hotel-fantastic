<!doctype html>
<html class="mr-[-300px] md:m-0 p-0">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> @yield('title')</title>
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon"href="{{ asset('assets/images/favicon.png') }}"  type="image/x-icon">
  @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-12">
  @if (isset(auth()->user()->is_admin))
  @if (auth()->user()->is_admin)
    
  <div class="  col-span-3 xl:col-span-2 lg:block" id="dd">

    @include('partials._sidebar')
  </div>
  @endif
    
  @endif
  <div id="layout" class=" {{ isset(auth()->user()->is_admin) ?auth()->user()->is_admin?' lg:col-span-9 xl:col-span-10 col-span-12':'col-span-12':'col-span-12' }} relative">   

    @include('partials._header')
    @include('partials._confirme')
    @include('partials._messageSucces')
    @yield('content')
    @include('partials._footer')
    
  </div>
  <script>
     function show(id,classname=[]){
      
       var element=document.getElementById(id)
      if(classname.length!==0){
        for(let i=0;i<classname.length;i++){
          element.classList.toggle(classname[i])
        }
      }else{
        element.classList.toggle('hidden')

      }
    }
    function confirme(e){
      e.preventDefault()
      var confirme=document.getElementById('confirme')
      var ok=document.getElementById('ok')
      confirme.classList.remove('hidden')
      ok.href=e.target.href
    }
  </script>

   
@yield('scripts')
</body>
</html>