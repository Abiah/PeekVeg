<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PeekVeg Product') }}
        </h2>
    </x-slot>

    <div class="shadow-2xl bg-white rounded-lg h-18">
        <!-- component -->
        @if ($errors->any())
            <div class="flex justify-center alert text-center">
                <ul class="text-center">
                    @foreach ($errors->all() as $error)
                        <li class="alert bg-green-600 text-center border rounded-md p-3 text-white ">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('added'))
        <div class="flex justify-center alert text-center">
            <label class="alert bg-green-600 text-center border rounded-md p-3 text-white ">{{ session('added') }}</label>
        </div>
        @endif

        
    <form  action="{{ route('add_product') }}" method="post">  
        @csrf
        @method("post")
        <section class="py-20 bg-gray-100  bg-opacity-50 ">
            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-between space-x-96 ml-10">
                            <h1 class="text-gray-600 mt-4 pt-1">{{ Auth::user()->organisation_code }}</h1>  <x-jet-application-logo class="block h-12 w-auto" />
                        </div>
                    </div>
                </div>
                <div class="bg-white space-y-6">
                    <div class="md:inline-flex space-y-4 space-y-2 w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 max-w-sm mx-auto font-semibold">Product</h2>
                        <div class="md:w-2/3 max-w-sm mx-auto">
                            <label class="text-sm text-gray-900">Name</label>
                            <div class="w-full">
                                <input type="text"
                                    class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="productname"
                                    placeholder="Product Name" />
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex  space-y-4 space-y-2  w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 mx-auto max-w-sm font-semibold">Procduct info</h2>
                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                            <div>
                                <label class="text-sm text-gray-900">Price</label>
                                <div class="w-full ">

                                    <input type="text"
                                        class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="productprice"                                      
                                        placeholder="Product Price" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm text-gray-900">Number of Stock</label>
                                <div class="w-full ">
                                    <input type="text"
                                        class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="productstock"
                                        placeholder="Stock" />
                                </div>
                            </div>

                            <div>
                                <label class="text-sm text-gray-900">Category (Fruit, Vegetables)</label>
                                <div class="w-full ">
                                    <select name="productcategory" class="form-select mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option aria-placeholder="category" placeholder="category" disabled selected>Category</option>
                                        @forelse ($category as $item)
                                      
                                        <option value="{{$item->category_id}}"> {{$item->category_id}} - {{$item->fruit }} - {{$item->vegetables}}</option>
                                        @empty
                                            <option value="" disabled aria-disabled="true">Nothing to serve</option>
                                        @endforelse
                                       
                                      </select>
                                   
                                </div>
                            </div>

                            <div class="w-full">
                                <label class="block mb-1" for="">Description</label>
                                <textarea  name="description" class="w-full px-3 py-2 placeholder-gray-600 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
                              </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 mx-auto max-w-sm font-semibold">Farm info</h2>

                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                            <label class="text-sm text-gray-900">Farm code</label>
                            <div class="w-full inline-flex border-b">
                               
                                <select name="farmcode" class="form-select mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  >
                                    <option  disabled  selected>Farm Code</option>
                                    @forelse ($farm_code as $farmcodes)
                                  
                                    <option value="{{$farmcodes->farm_code}}"> {{$farmcodes->farm_code  }} - {{$farmcodes->farm_produce}}</option>
                                    @empty
                                        <option value="" disabled aria-disabled="true">Nothing to serve</option>
                                    @endforelse
                                   
                                  </select>
                               
                            </div>
                        </div>
                    </div>


                    <hr />
                    <div class="w-full p-4 text-right">
                        <button 
                            class="inline-flex text-white w-50 max-w-sm rounded-md text-right bg-green-600 py-2 px-4 items-center focus:outline-none">
                            <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </section>
        
    </form>
    </div>
</x-app-layout>