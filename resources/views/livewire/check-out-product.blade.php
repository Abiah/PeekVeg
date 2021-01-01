<div>
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
        <header>
            <div class="container mx-auto px-6 py-3">
                <div class="flex items-center justify-between">
                    <div class="hidden w-full text-gray-600 md:flex md:items-center">
                       
                    </div>
                    <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                        PeekVeg CheckOut
                    </div>
                    <div class="flex items-center justify-end w-full">
                        <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none mx-4 sm:mx-0">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
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
                
                        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="{{ route('show_peek_product')}}" >Shop</a>
                   
                    </div>
                </nav>
                {{-- <div class="relative mt-6 max-w-lg mx-auto">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
    
                    <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
                </div> --}}
            </div>
        </header>
        
        <main class="my-8">
            <div class="container mx-auto px-6">
                <h3 class="text-gray-700 text-2xl font-medium">Checkout</h3>
                <div class="flex flex-col lg:flex-row mt-8">
                    <div class="w-full lg:w-1/2 order-2">
                        <div class="flex items-center">
                            {{-- <button class="flex text-sm text-blue-500 focus:outline-none"><span class="flex items-center justify-center text-white bg-blue-500 rounded-full h-5 w-5 mr-2">1</span> Contacts</button> --}}
                            <button class="flex text-sm text-gray-700 ml-8 focus:outline-none"><span class="flex items-center justify-center border-2 border-blue-500 rounded-full h-5 w-5 mr-2">1</span> Detials</button>
                            <button class="flex text-sm text-gray-500 ml-8 focus:outline-none" disabled><span class="flex items-center justify-center border-2 border-gray-500 rounded-full h-5 w-5 mr-2">2</span> Payments</button>
                        </div>
                        <form class="mt-8 lg:w-3/4" action="{{'payment'}}" method="post" >
                            @csrf
                            @method('post')
                            <div>
                                <h4 class="text-sm text-gray-500 font-medium">Delivery method</h4>
                                <div class="mt-6">
                                    <p class="flex items-center justify-between w-full bg-white rounded-md border-2 border-blue-500 p-4 focus:outline-none">
                                        <label class="flex items-center">
                                            <input type="checkbox" class="form-radio h-5 w-5 text-blue-600" ><span class="ml-2 text-sm text-gray-700">MS Delivery (Pay Before Delivery)</span>
                                        </label>
    
                                        <span class="text-gray-600 text-sm">Gh &#x20b5; 0</span>
                                    </p>
                                    <p class="mt-6 flex items-center justify-between w-full bg-white rounded-md border p-4 focus:outline-none">
                                        <label class="flex items-center">
                                            <input type="checkbox" class="form-radio h-5 w-5 text-blue-600"><span class="ml-2 text-sm text-gray-700">DC Delivery (Direct Cash Delivery)</span>
                                        </label>
    
                                        <span class="text-gray-600 text-sm">Gh &#x20b5; 10</span>
                                    </p>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-sm text-gray-500 font-medium">Delivery address</h4>
                                <div class="mt-6 flex">
                                    <label class="block w-3/12">
                                        <select class="form-select text-gray-700 mt-1 block w-full">
                                           @forelse ($cities as $item)
                                                <option value="{{$item->cities_code}}">{{$item->cities_short}} - {{$item->cities}}</option>
                                           @empty
                                                 <option>Shop unavailable</option>
                                           @endforelse
                                           
                                        </select>
                                    </label>
                                    <label class="block flex-1 ml-3">
                                        <input type="text" class="form-input mt-1 block w-full text-gray-700" placeholder="Address">
                                    </label>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-sm text-gray-500 font-medium">Date (when needed)</h4>
                                <div class="mt-6 flex">
                                    <label class="block flex-1">
                                        <input type="date" class="form-input mt-1 block w-full text-gray-700" placeholder="Date">
                                    </label>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-8">
                                <a href="{{ route('show_peek_product') }}" class="flex items-center text-gray-700 text-sm font-medium rounded hover:underline focus:outline-none">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                                    <span class="mx-2">Back step</span> 
                                </a>
                                <button class="flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <span>Payment</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="w-full mb-8 flex-shrink-0 order-1 lg:w-1/2 lg:mb-0 lg:order-2">
                        <div class="flex justify-center lg:justify-end">
                            <div class="border rounded-md max-w-md w-full px-4 py-3">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-gray-700 font-medium">Order total ({{\Cart::count()}}) (Weight)</h3>
                                    <span class="text-gray-600 text-sm">{{\Cart::Total()}} (Tax inclusive)</span>
                                </div>
                               @forelse (\Cart::content() as $item)
        
                                <div class="flex justify-between mt-3 mb-3">
                                    <div class="flex">
                                        <p id="profileImage" class="mt-2 text-center text-white bg-green-500 h-20 w-20 object-cover" >PeekVeg</p>
                                        {{-- <img class="h-20 w-20 object-cover rounded" src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80" alt=""> --}}
                                        <div class="mx-3">
                                            <h3 class="text-sm text-gray-600">{{$item->name}}</h3>
                                            <div class="flex items-center mt-2">
                                                {{-- <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                </button> --}}
                                                {{-- <span id="qytvalue" class="text-gray-700 mx-2">{{$item->qty}} </span> --}}
                                                {{-- <input type="number" min="1" class="w-1/4 rounded-md border-2 mr-1 border-blue-500" value="{{$item->qty}}" /> --}}
                                                {{-- <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                </button> --}}
                                                <form id="updating{{$item->rowId}}" action="{{ route('update',$item->rowId) }}" method="post" class="" >
                                                    @csrf @method('POST')  
                                                    Weight :&nbsp; <input name="quantity" placeholder="{{$item->qty}}" type="text" min="1" class="w-1/5 rounded-md border-2 mr-1 border-blue-500" value="{{$item->qty}}" />
                                                    / kilo(s) &nbsp;
                                                    <button onclick="event.preventDefault(); document.getElementById('updating{{$item->rowId}}').submit();" class="text-gray-500 focus:outline-none bg-yellow-400 p-2 rounded focus:text-gray-600">
                                                        update
                                                    </button>
                                                   </form>
                                            </div>
    
                                            
                                        </div>
                                    </div>
                                    <span class="text-gray-600">Gh &#x20b5; {{$item->subTotal()}}</span>
                                </div>
                               
                            <hr>
                               @empty
                                   
                               @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <footer class="bg-gray-200">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">PeekVeg</a>
                <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
            </div>
        </footer>
    </div>
</div>
