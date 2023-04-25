<li  {{ $attributes(['id'=>''])}} class="relative"><a
    {{ $attributes([
  'class'=>"flex  cursor-pointer items-center truncate rounded-[5px] px-12 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none "
    ])}}
>
{{ $slot }}
</a></li>