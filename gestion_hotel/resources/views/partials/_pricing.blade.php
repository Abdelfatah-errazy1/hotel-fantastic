<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">
  
  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">
    <h2 class="text-3xl font-bold text-center mb-6">Pricing</h2>
    <div class="flex  justify-center items-center ">

      <p class="text-center  mb-12 text-gray-500 max-w-xl">
        Les chambres climatisées comportent une salle de bains privative pourvue d'une douche. Vous disposerez aussi d'un bureau.
      </p>
    </div>

    <div class="grid lg:grid-cols-4 gap-6 xl:gap-x-12">
      <div class="mb-6 lg:mb-0">
        <div class="block rounded-lg shadow-lg bg-white h-full  border hover:border-blue-400">
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm">
              <strong>Hobby</strong>

            </p>
            <h3 class="text-2xl mb-6">
              <strong>$ {{ $model->price }}</strong>
              <small class="text-gray-500 text-sm">/night</small>
            </h3>

            <button type="button"
              class="inline-block px-6 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
              style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true" data-mdb-ripple="true"
              data-ripple-color="primary">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <x-pricing-item> Parking</x-pricing-item>
              <x-pricing-item> Chauffage</x-pricing-item>
              <x-pricing-item>Connexion Wi-Fi </x-pricing-item>
             
            </ol>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0">
        <div class="block rounded-lg shadow-lg bg-white h-full border hover:border-blue-400">
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm">
              <strong>Basic</strong>
            </p>
            <h3 class="text-2xl mb-6">
              <strong>$ 129</strong>
              <small class="text-gray-500 text-sm">/night</small>
            </h3>

            <button type="button"
              class="inline-block px-6 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
              style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true" data-ripple-color="primary">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <x-pricing-item> Parking</x-pricing-item>
              <x-pricing-item> Chauffage</x-pricing-item>
              <x-pricing-item>Connexion Wi-Fi </x-pricing-item>
              <x-pricing-item>Petit-déjeuner</x-pricing-item>
              
              <x-pricing-item> Équipements pour les handicapées</x-pricing-item>

              <x-pricing-item> Chambres familiales</x-pricing-item>
            </ol>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0">
        <div class="block rounded-lg bg-white h-full border border-blue-600">
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm">
              <strong>Advanced</strong>
            </p>
            <h3 class="text-2xl mb-6">
              <strong>$ 299</strong>
              <small class="text-gray-500 text-sm">/night</small>
            </h3>

            <button type="button"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
              data-mdb-ripple="true" data-ripple-color="light">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <x-pricing-item> Parking</x-pricing-item>
              <x-pricing-item> Chauffage</x-pricing-item>
              <x-pricing-item>Connexion Wi-Fi </x-pricing-item>
              <x-pricing-item>Petit-déjeuner</x-pricing-item>
              <x-pricing-item> Équipements pour les handicapées</x-pricing-item>
              <x-pricing-item> Chambres familiales</x-pricing-item>
              <x-pricing-item>Jardin</x-pricing-item>
              
            </ol>
          </div>
        </div>
      </div>
    
      <div class="mb-6 lg:mb-0">
        <div class="block rounded-lg shadow-lg bg-white h-full  border hover:border-blue-400">
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm">
              <strong>Excelent</strong>
            </p>
            <h3 class="text-2xl mb-6">
              <strong>$ 499</strong>
              <small class="text-gray-500 text-sm">/week</small>
            </h3>

            <button type="button"
              class="inline-block px-6 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
              style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true" data-ripple-color="primary">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <x-pricing-item> Parking</x-pricing-item>
              <x-pricing-item> Chauffage</x-pricing-item>
              <x-pricing-item>Connexion Wi-Fi </x-pricing-item>
              <x-pricing-item>Petit-déjeuner</x-pricing-item>
              <x-pricing-item> Équipements pour les handicapées</x-pricing-item>
              <x-pricing-item> Chambres familiales</x-pricing-item>
              <x-pricing-item>Jardin</x-pricing-item>
              
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  
</div>
<!-- Container for demo purpose -->