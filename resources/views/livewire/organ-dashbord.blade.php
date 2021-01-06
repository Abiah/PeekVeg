
<div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="flex ">
            <x-jet-application-logo class="block h-12 w-auto" />
            <div class="ml-4 mt-2 font-semibold text-3xl">PeekVeg</div>
        </div>
    
        <div class="mt-8 text-2xl">
            Welcome to your PeekVeg dashboard!
        </div>
    
        <div class="mt-6 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
    
    <p class="ml-16 bg-yellow-300 p-5 text-white shadow-md rounded-sm mt-5">Recent Bought Products</p>
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-2">
        @forelse ($recent as $item)
        <div class="p-6">
            
                <a href="#">

                    <div class="ml-12">
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
                                <div class="bg-white shadow-lg rounded-lg py-5 px-5">
                                  <span class="font-bold text-gray-800 text-lg">OrderID : {{$item->purchase_id}}</span>
                                  <div class="flex flex-shrink-0 items-center justify-between">
                                    <div class="text-sm text-gray-600 font-light">Status : {{$item->status}}</div>
                                    
                                    <div class="text-xs text-red-600 font-bold">Date : {{\Carbon\Carbon::parse($item->purchase_date)->diffForHumans()}}</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                          </div>
                        </div>
        
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>check product</div>
        
                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                </a>
                
        </div>
        @empty
                
        @endforelse

    </div>
    <section class="mx-auto ml-5 mr-5 mb-2">
        {{$recent->links()}}
    </section>
</div>
