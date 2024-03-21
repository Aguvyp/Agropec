<div class="flex flex-col ms-2 mb-2 text-gray-700 bg-gray-200 shadow-md bg-clip-border rounded-xl max-w-64 h-auto">

    <p class="flex justify-center p-2 text-lg font-normal bg-orange-600 rounded-t-lg text-black">
        @if ($product->user)
            <!-- Verifica si el producto tiene un usuario asociado -->
            {{ $product->user->name ?? 'Nombre no disponible' }}
        @else
            Nombre no disponible
        @endif
    </p>

    <div class="mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl aspect-w-2 aspect-h-1">
        <div class="w-full h-40">
            <img src="{{ asset('images/' . $product->image) }}" alt="Imagen del producto"
                class="object-cover w-full h-full rounded-xl" />
        </div>
    </div>

    <div class="p-6">
        <div class="flex items-center justify-between mb-2 max-h-24">
            <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                {{ $product->name }}
            </p>
            <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                {{ $product->price }} Uni.
            </p>
        </div>

        <div class="flex justify-center min-w-14 min-h-14 m-2">
            <p class="font-sans text-sm font-normal leading-normal text-gray-700 opacity-75 max-h-36">
                {{ $product->description }}
            </p>

        </div>

        <div class="max-h-16">
            <p class=" text-sm">
                {{ $product->user->localidad }}, {{ $product->user->departamento }}, {{ $product->user->provincia }}
            </p>
        </div>

        @auth
            <div class="flex justify-center align-bottom">

                @php
                    $nombreUsuario = urlencode($product->user->name);
                    $mensajeCodificado = urlencode("Hola, $nombreUsuario, me interesa tu publicacion en Vacalandia");
                @endphp

                <a class="rounded lg border border-black bg-orange-600 text-black p-2 m-4"
                    href="https://api.whatsapp.com/send?phone={{ $product->user->tel }}&text={{ $mensajeCodificado }}">Contactar</a>
            </div>
        @endauth
    </div>
</div>
