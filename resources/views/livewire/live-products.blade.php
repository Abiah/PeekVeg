<div>
<div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
    <header>
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="hidden w-full text-gray-600 md:flex md:items-center">
                </div>
                <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                    Products
                    <hr>
                </div>
                <div class="flex items-center justify-end w-full">
                    <button @click="cartOpen = !cartOpen" class="flex text-gray-600focus:outline-none mx-4 sm:mx-0">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <sup class="text-md m-1  rounded-full">{{\Cart::count()}}</sup>
                    </button>

                    <div class="flex sm:hidden">
                        <button @click="isOpen = !isOpen" type="button" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a>
                </div>
            </nav>
            <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center" >
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  
                </svg>
                
            </span>

                <input  wire:model="search"  value="{{old('search')}}"  class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
              
            </div>
        </div>
    </header>
    <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in' " class="fixed z-10 right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
        <div class="flex items-center justify-between">
            <h3 class="text-2xl font-medium text-gray-700">Your cart </h3>
            <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <hr class="my-3">
       
        @forelse (\Cart::content() as $item)
        <div class="flex justify-between mt-6">
            <div class="flex">
                
                <div class="mx-3">
                    <h3 class="text-sm text-gray-600">{{$item->name}}</h3>
                    <div class="flex items-center mt-2">
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                        <span class="text-gray-700 mx-2">{{$item->qty}}</span>
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <span class="text-gray-600">Gh &#x20b5; {{$item->price}}</span>
        </div>
        @empty
            
        @endforelse
       
        {{-- <div class="mt-8">
            <form class="flex items-center justify-center">
                <input class="form-input w-48" type="text" placeholder="Add promocode">
                <button class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <span>Apply</span>
                </button>
            </form>
        </div>  { route('checkout')}} --}}
        <a href="{{ route('org.checking_out')}}" class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
            <span>Chechout</span>
            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>

    <!--main page-->
    <main class="my-8">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-700 text-2xl font-medium ">All PeekVeg Products</h3>
            <span class="mt-3 text-sm text-gray-500">{{$count}} + Farms and still counting</span>
            @if (request()->routeIs('search'))
            <p> {{count($all_product)}} Result retrieved</p>
        @endif
            <hr>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6  ">
               @forelse($all_product as $vegs )
              
               <form action="{{ route('add_cart',$vegs->id) }}" id="{{$vegs->id}}" method="post" wire:loading.class="animate-pulse">
                @csrf
                @method("post")
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden" id="{{$vegs->id }}">
                    <div  class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url({{ asset('images/peek.jpg') }}) ">
                        <p id="profileImage" class="text-gray-600 shadow-lg mr-6 space-x-5 mb-5">PeekVeg</p>
                        <button type="submit" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase"> &bull; {{$vegs->product_name}} &bull;</h3>
                        <span  class="text-gray-500 mt-2">Gh &#x20b5; {{ $vegs->price}} / Kilo</span> &bull;
                        &nbsp;
                        <span class="text-gray-500 mt-2">{{ $vegs->farms_code}}</span> &bull;
                        &nbsp;
                        <span class="text-gray-500 mt-2">{{ $vegs->location}}</span> &bull;
                        <hr>

                        <span class="text-gray-500 mt-2">{!! nl2br($vegs->description)!!}</span>
                    </div>
                </div>
               </form>
            
               @empty
            
                <form  method="post" wire:loading.class="animate-pulse" >
                    <p class="text-sm text-gray-800" wire:loading.class="animate-pulse" >No Products to display</p>
                    @csrf
                    @method("post")
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden pb-12"  >
                        <div  class="flex items-end justify-end  h-56 w-full bg-cover" style="background-image: url({{ asset('images/peek.jpg') }}) ">
                            <p id="profileImage" class="text-gray-600 shadow-lg mr-3 space-x-5 mb-5">PeekVeg</p>
                            <button type="submit" class="p-2 rounded-full bg-blue-600 text-white mx-5 mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                    </div>
                   </form>
               @endforelse
            </div>
            <div class="flex justify-center">
                <div class="flex rounded-md mt-8">
                    <div class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white">
                        {{$all_product->links()}}
                    </div>
                   
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-200 fixed bottom-0 w-full">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Peek vegatables</a>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved @ {{now()->year}}</p>
        </div>
    </footer>
</div>


<style>
    #profileImage {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  font-size: 35px;
  color: #fff;
  text-align: center;
  line-height: 150px;
}
</style>
</div>