<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PeekVeg Farm') }}
        </h2>
    </x-slot>

    <div class="shadow-2xl bg-white rounded-lg h-18 font-semibold">
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
    
    @if (session()->has('farmcode'))
    <div class="flex justify-center alert text-center">
        <label class="alert bg-green-600 text-center border rounded-md p-3 text-white">
            {{'new farm code :' . session('farmcode')}}
        </label>    
    </div>
    @endif
  
        
    @if (session()->has('error'))
    <div class="flex justify-center alert text-center">
        <label class="alert bg-green-600 text-center border rounded-md p-3 text-white">
            {{session('error')}}
        </label>    
    </div>
    @endif
    <form action="{{ route('post_add_farm') }}" method="post">  
        @csrf
        @method("post")
        <section class="py-20 bg-gray-100  bg-opacity-50 ">
            <div class="mx-auto container sm:w-3/4 max-w-2xl lg:w-1/2 md:w-3/4 shadow-md">
                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-between space-x-96 ml-10">
                            <h1 class="text-gray-600 mt-4 pt-4">{{ Auth::user()->organisation_code }}</h1>  <x-jet-application-logo class="block h-12 w-auto" />
                        </div>
                    </div>
                </div>
                <div class="bg-white space-y-6">
                    <div class="md:inline-flex space-y-5 md:space-y-4 w-full p-4 text-gray-900 items-center">
                        <h2 class="md:w-1/3 max-w-sm mx-auto ">Farms</h2>
                        <div class="md:w-2/3 max-w-sm mx-auto space-y-4">
                            <label class="text-sm text-gray-900 font-semibold">Farm type</label>
                            <div class="w-full">
                                <select name="farmtype" required class="form-select mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="Vegertables" >Vegetables</option>
                                    <option value="Fruit"> Fruit</option>
                                    <option value="Fruit and vegetables"> Fruit And Vegetables</option>
                                </select>
                            </div>
                       
                            <label class="text-sm text-gray-900 font-semibold space-y-4">Farm Location (Full Location)</label>
                            <div class="w-full">
                                <input type="text" 
                                required
                                class=" block mt-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="farm_location"                                      
                                placeholder="Cape coast 3rd Rigde" />
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-900 items-center">
                        <h2 class="md:w-1/3 mx-auto max-w-sm font-semibold">Farm Produce</h2>
                        <div class="md:w-2/3 mx-auto max-w-sm space-y-10">
                            <div class="mb-3">
                                <label class="text-sm text-gray-900 font-semibold" >Produce (Seperate by a comma if many)</label>
                                <div class="w-full">

                                    <input type="text"
                                        required
                                        class="mb-5 block font-semibold mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="farm_produce"                                      
                                        placeholder="Produce" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm text-gray-900 font-semibold">Minimium Produce / Number</label>
                                <div class="w-full ">
                                    <input type="text"
                                        required
                                        class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="min_produce"
                                        placeholder="Minimium Produce" />
                                </div>
                            </div>

                            <div>
                                <label class="text-sm text-gray-900 font-semibold">Maximium Produce / Number</label>
                                <div class="w-full ">
                                   
                                    <input type="text"
                                        required
                                        class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="max_produce"
                                        placeholder="Maximium Produce" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="w-full p-4 text-right">
                        <button 
                            class="inline-flex text-white w-50 max-w-sm rounded-md text-right bg-green-600 py-2 px-4 items-center focus:outline-none">
                            <svg  class="w-4 text-white mr-2"  stroke="currentColor"  viewBox="0 0 469.333 469.333" width="625.778" xmlns="http://www.w3.org/2000/svg"><g fill="#4caf50"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M437.332 192H32c-17.664 0-32 14.336-32 32v21.332c0 17.664 14.336 32 32 32h405.332c17.664 0 32-14.336 32-32V224c0-17.664-14.336-32-32-32zm0 0"/><path d="M192 32v405.332c0 17.664 14.336 32 32 32h21.332c17.664 0 32-14.336 32-32V32c0-17.664-14.336-32-32-32H224c-17.664 0-32 14.336-32 32zm0 0"/></g></svg>
                            Create Farm
                        </button>
                    </div>
                </div>
            </div>
        </section>
        
    </form>
    </div>

</x-app-layout>