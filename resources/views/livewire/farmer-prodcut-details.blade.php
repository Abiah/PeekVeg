<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('PeekVeg Product') }}
            </h2>
        </x-slot>
    <div class="bg-gray-200 bg-opacity-15 pt-11 h-auto">
        <form class="h-screen space-y-12 text-gray-700 mx-96 " wire:submit.prevent='updated'>
         
            <div class="flex flex-wrap">
              <div class="w-full">
                <label class="block mb-1" for="formGridCode_card">Product Name</label>
                <input disabled value={{$id->product_name}} class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card"/>
              </div>
            </div>
            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
              <div class="w-full px-2 md:w-1/2">
                <label class="block mb-1" for="formGridCode_name">Price / Gh/&#x20b5 </label>
                <input wire:model="price" value="{{$id->price}}"  class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_name"/>
              </div>
              <div class="w-full px-2 md:w-1/2">
                <label class="block mb-1" for="formGridCode_last">Location</label>
                <input wire:model="location" value="{{$id->location}}"  class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_last"/>
              </div>
            </div>
            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
              <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_month">Stock</label>
                <input wire:model="stock" value="{{$id->stock}}"  class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_month"/>
              </div>
              <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_year">Category</label>
                <input disabled value="{{$id->category}}" class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_year"/>
              </div>
              <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_cvc">Farmer Code</label>
                <input disabled value="{{$id->farmer_code}}" class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_cvc"/>
              </div>
    
                <div class="w-full">
                  <label class="block mb-1" for="">Description</label>
                  <textarea wire:model="description"  class="w-full px-3 py-2 placeholder-gray-600 text-gray-700 border rounded-lg focus:outline-none" rows="4">{!! nl2br($id->description) !!}</textarea>
                </div>
          
              <div class="w-full p-4 text-right">
                <button type="submit" 
                    class="inline-flex text-white w-50 max-w-sm rounded-md text-right bg-green-600 py-2 px-4 items-center focus:outline-none">
                    <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Update Peek
                </button>
              </div>
            </div>
          </form>
    </div>
</x-app-layout>

</div>