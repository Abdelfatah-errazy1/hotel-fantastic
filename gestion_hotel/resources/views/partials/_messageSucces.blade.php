@if (session()->has('message'))
<div id="messageSuccess"  class="fixed p-8 mt-10 top-[100px] left-[600px]  z-[4000] ">
  <div class="w-96 h-70 mx-auto p-4 rounded-xl shadow-xl bg-gray-100">
      <h1 class="text-2xl font-bold text-green-500 mb-4">{{ session('type')==1?'Success' :'Fails'}}</h1>
  <p class="text-gray-700 text-left mb-4 font-medium">{{ session('message') ? "the record added successfly" :'fails'}}</p>

      <div class="text-right flex justify-center gap-4 items-center">
          
          <a onclick="show('messageSuccess')"
              class=" cursor-pointer inline-block bg-indigo-500 py-2 px-4 text-white rounded-md font-semibold uppercase text-sm ">cancel
          </a>
      </div>
  </div>
</div>
@endif