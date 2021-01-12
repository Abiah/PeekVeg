<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buy Products') }}
        </h2>
    </x-slot>


    <div class="relative left-32 mt-20 pt-1 container">
        <div class="flex mb-2 items-center justify-between">
          <div>
            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200">
              order's progress
            </span>
          </div>
          <div class="text-right">
            <span class="font-extrabold text-2xl px-2 py-2 inline-block text-pink-600">
             {{ucfirst($id->status)}}
            </span>
          </div>
        </div>
        <div class="overflow-hidden h-12 mb-4 text-xs flex rounded bg-pink-200">
        @if ($id->status_code == 1 )
        <div style="width:30%" class="shadow-none  font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">Order accepted</div>
        
        <div style="width:30%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-200"></div>
        <div style="width:30%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-200"></div>

        @elseif($id->status_code ==2 )
   
        <div style="width:50%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">Order accepted</div>
      
        <div style="width:50%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-900">In transit</div>
        
        <div style="width:50%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-200"></div>
       
        @elseif($id->status_code == 3 )
       
        <div style="width:40%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">Order accepted</div>
        
        <div style="width:40%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-900">In transit</div>
       
        <div style="width:40%" class="shadow-none font-extrabold text-lg flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-400">Delivered</div>
        @endif
        </div>

        <div class="">
            <div class="mt-2 text-sm text-gray-500">
                <div class="container mx-auto">
                <div class="flex flex-col items-center">
                  <div class="bg-white overflow-hidden rounded-lg w-full relative pb-36">
                    <img
                      src="https://source.unsplash.com/MNtag_eXMKw/1600x900"
                      class="absolute h-full w-full object-cover object-center"
                      alt=""
                    />
                  </div>
                  <div class="z-10 -mt-12 px-6 w-full ">
                    <div class="bg-white shadow-lg rounded-lg py-15 px-5">
                      <span class="font-bold text-gray-800 text-lg">OrderID : {{$id->purchase_id}}</span>
                      <div class="flex flex-grow-0 items-center justify-between">
                        <div class="text-sm text-gray-600 font-light">Status : {{$id->status}}</div>
                        <div class="text-sm text-gray-600 font-light">Products : {{$id->product_name}}</div>
                        <div class="text-sm text-gray-600 font-light">Farmer code : {{$id->farmer_code}}</div>
                        <div class="text-sm text-gray-600 font-light">When Needed : {{$id->when_needed}}</div>
                        <div class="text-sm text-gray-600 font-light">delivery address : {{$id->delivery_address}}</div>
                        
                        <div class="text-xs text-red-600 font-bold">Date Purchased : {{\Carbon\Carbon::parse($id->purchase_date)->diffForHumans()}}</div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>

        </div>
      </div>

</x-app-layout>