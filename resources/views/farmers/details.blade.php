<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PeekVeg Product') }}
        </h2>
    </x-slot>
    @livewire('farmer-prodcut-details')
</x-app-layout>