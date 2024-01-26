<x-app-layout>
    <x-slot name="header">
        <a  href="{{-- {{ route('tweets') }} --}}">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Inicio
            </x-nav-link>
            <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                Productos
            </x-nav-link>
        </a>
    </x-slot>

    @guest
        <div class="flex bg-white justify-center border border-gray-200 rounded-lg shadow-md mt-5 lg:mx-auto lg:w-8/12 items-center"
            style="height: 4rem">
            <p>Debes <a href="{{ route('login') }}" class="text-green-600">iniciar sesión</a> o <a class="text-green-600" href="{{route('register')}}">registrarte</a> para publicar alimento o
                armar el carrito</p>
        </div>
    @endguest

    <div
        class="flex flex-wrap justify-center border border-gray-200 rounded-lg shadow-md max-w-4xl mt-4 mx-auto p-8  bg-white mb-8">
        @foreach ($products as $product)
            <div class="flex flex-col ms-2 mb-2 text-gray-700 bg-gray-200 shadow-md bg-clip-border rounded-xl max-w-64 h-auto">

                    <p class="flex justify-center p-2 text-lg font-normal bg-green-400 rounded-t-lg text-black">
                        @if ($product->user)
                            <!-- Verifica si el producto tiene un usuario asociado -->
                          {{ $product->user->name ?? 'Nombre no disponible' }}
                        @else
                            Nombre no disponible
                        @endif
                    </p>

                    <div class="mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl aspect-w-2 aspect-h-1">
                        <div class="w-full h-40">
                            <img src="{{ asset('images/' . $product->image) }}" alt="Imagen del producto" class="object-cover w-full h-full rounded-xl" />
                        </div>
                    </div>

                <div class="p-6">
                    <div class="flex items-center justify-between mb-2 max-h-24">
                        <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            {{ $product->name }}
                        </p>
                        <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            ${{ $product->price }}
                        </p>
                    </div>

                    <div class="flex justify-center min-h-36 max-h-36">
                        <p class="font-sans text-sm font-normal leading-normal text-gray-700 opacity-75 max-h-36">
                            {{ $product->description }}
                        </p>
                    </div>


                    <div class="flex justify-center">
                        <button class="bg-green-400 rounded-lg p-2 m-2 hover:scale-110 text-black">Añadir al
                            carrito</button>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

    <div class="max-w-24 max-h-24 bg-white rounded-lg shadow-sm m-4 flex fixed bottom-0 inset-x">
        <a href=""><img class="max-w-24 max-h-24"
                src="https://cdn.icon-icons.com/icons2/1993/PNG/512/bag_buy_cart_market_shop_shopping_tote_icon_123191.png"
                alt=""></a>
    </div>
</x-app-layout>
