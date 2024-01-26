<x-app-layout>
    <x-slot name="header">
        <a href="{{-- {{ route('tweets') }} --}}">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Inicio
            </x-nav-link>
            <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                Productos
            </x-nav-link>
        </a>
    </x-slot>

    <x-slot name="head">
        <h2 class="font-semibold text-xl text-black dark:text-lime-900 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
