<x-app-layout>
    <x-slot name="header">
        <a  href="{{-- {{ route('tweets') }} --}}">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Inicio
            </x-nav-link>
            <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                Lotes
            </x-nav-link>
        </a>
    </x-slot>

    @guest
        <div class="flex bg-white justify-center border border-gray-200 rounded-lg shadow-md mt-5 lg:mx-auto lg:w-8/12 items-center"
            style="height: 4rem">
            <p>Debes <a href="{{ route('login') }}" class="text-green-600">iniciar sesión</a> o <a class="text-green-600" href="{{route('register')}}">registrarte</a> para publicar alimento o
                contactarte con un vendedor</p>
        </div>
    @endguest

    <div class="flex flex-wrap justify-center rounded-lg shadow-md max-w-4xl mt-4 mx-auto p-8  bg-transparent mb-8">
        <p>Para dirigirse a sus lotes, click en Mi cuenta y luego en Mis Lotes</p>
    </div>

    <div
        class="flex flex-wrap justify-center border border-gray-200 rounded-lg shadow-md max-w-4xl mt-4 mx-auto p-8  bg-white mb-8">
        @foreach ($products as $product)
            <x-products.product :product="$product">
            </x-products.product>
        @endforeach
    </div>

</x-app-layout>
