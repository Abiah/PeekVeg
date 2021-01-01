<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PeekVeg Products') }}
        </h2>
    </x-slot>



    @livewire('check-out-product')

<style>
    #profileImage {
  width: 100px;
  height: 67px;
  border-radius: 50%;
  font-size: 12px;
  text-align: center;
  line-height: 70px;
}
</style>

 </x-app-layout>