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

    <div
        class="newsflex flex-wrap justify-center border border-gray-200 rounded-lg shadow-md max-w-4xl mt-4 mx-auto p-8  bg-white mb-8"">
        <div class="mb-4">
            <p>Agropecmercados es un sitio multivendedor donde podes conseguir comida para tus animales.
                Podes publicar tu producto para la venta y tambien agregar al carrito el producto
                que estes necesitando
            </p>
        </div>

        <a class="bg-lime-600 rounded-lg p-2 mt-10" href="{{route('shop')}}">Ir a ver los productos</a>

    </div>

    <div class="welcome-image max-w-4xl mt-4 mx-auto mb-8">
        <img class="rounded-lg " src="https://www.castexaldia.com.ar/wp-content/uploads/2018/03/rollo.jpg" alt="">
    </div>

</x-app-layout>
