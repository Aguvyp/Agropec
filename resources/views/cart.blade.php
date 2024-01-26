<x-app-layout>
    <x-slot name="header">
        <a href="{{-- {{ route('tweets') }} --}}">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Inicio
            </x-nav-link>
        </a>
    </x-slot>
    <div
        class="flex flex-wrap justify-center border border-gray-200 rounded-lg shadow-md max-w-4xl mt-4 mx-auto p-8  bg-white mb-8">
    </div>
    </x-app-layout>
