<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="flex ">
        <x-jet-application-logo class="block h-12 w-auto" />
        <div class="ml-4 mt-2 font-semibold text-3xl">PeekVeg</div>
    </div>

    <div class="mt-8 text-2xl">
        Welcome to your PeekVeg dashboard Farmer!
    </div>

    <div class="mt-6 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-2">
    <div class="p-0">
        @forelse ($all_product as $product)
        {{-- {{ route('show_peek', $product->id) }} --}}
        <a href="#"   wire:loading.class="animate-pulse">
            <div class="ml-2">
                <div class="mt-2 text-sm text-gray-500">
                    <div class="shadow-sm relative top-0 px-2 py-2 mt-3">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-full h-1/2">
                            <div class="flex  flex-wrap md:flex-wrap-reverse items-center">
                                <span
                                    class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                    {{$product->product_id}}
                                </span>
                                <div class="ml-1 text-wrap text-gray-600 uppercase text-xs font-semibold tracking-wider ">
                                    <label class="break-normal md:break-all">{{$product ->location}}    @if ($product->total_purchase == '')
                                       &bull;</br> {{'0' .' Purchaces'}}
                                        @else
                                        <br>&bull;
                                        {{$product->total_purchase.' Purchases'}}</label>
                                    @endif
                                </div>
                            </div>
                                <hr>
                            <h4 class="mt-1 text-xl font-semibold uppercase leading-tight ">{{$product->product_name}}
                            </h4>
    
                            <div class="mt-1">
                                {{$product->price}}
                                <span class="text-gray-600 text-sm"> Gh/&#x20b5</span>
                            </div>
                            <div class="flex flex-shrink space-x-3 mt-4">
                                <label class="text-gray-600" for="">last purchase:</label>
                                <span class="text-gray-600 text-md font-normal">@if ($product->last_purchase =='')
                                    {{'Recently uploaded'}}
                                @else
                                 {{$product->last_purchase}}
                                @endif</span>
                                <div class="text-gray-600 mt-1 text-md font-semibold">Price: {{$product->price}} </div>
                                <div class="text-gray-600 mt-1 text-md font-semibold">Stock: {{$product->stock}} </div>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <span class="text-teal-600 text-md font-extralight">4/5 ratings </span>
                                <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
        @empty
        <div class="p-2" wire:loading.class="animate-pulse">
        <a href="#" >
            <div class="ml-2">
                <div class="mt-2 text-sm text-gray-500">
                    <div class="shadow-sm relative top-0 px-2 py-2 mt-3 ">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-full h-1/2">
                            <div class="flex  flex-wrap md:flex-wrap-reverse items-center">
                                <span
                                    class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                   
                                </span>
                                <div class="ml-1 text-wrap text-gray-600 uppercase text-xs font-semibold tracking-wider ">
                                    <label class="break-normal md:break-all"></label>
                                </div>
                            </div>
                                <hr>
                            <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">
                            </h4>
    
                            <div class="mt-1">
                               
                                <span class="text-gray-600 text-sm"> </span>
                            </div>
                            <div class="mt-4">
                                <label class="text-gray-600" for="">last purchase: </label>
                                <span class="text-gray-600 text-md font-normal"></span>
                                <div class="text-gray-600 mt-1 text-md font-semibold">Price: </div>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <span class="text-teal-600 text-md font-extralight">n/a ratings </span>
                                <span class="text-sm text-gray-600">(based on n/a ratings)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>

        @endforelse
        {{$all_product->links()}}
</div>
