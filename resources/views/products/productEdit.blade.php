<x-app-layout>
    <x-slot name="header">
        <a href="">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Inicio
            </x-nav-link>
            <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                Productos
            </x-nav-link>
        </a>
    </x-slot>

    <div class="newsflex flex-wrap justify-center border border-gray-200 rounded-lg shadow-md max-w-2xl mt-4 mx-auto p-8  bg-white mb-8">
        <form action="{{ route('shop.update', ['product' => $product->id]) }}" method="POST" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <p>Nombre</p>
                <input type="text" name="name" class="rounded-lg" value="{{$product->name}}">
            </div>
            <div>
                <p>Precio</p>
                <input type="number" name="price" class="rounded-lg" value="{{$product->price}}">
            </div>
            <div>
                <p>Descripcion</p>
                <input type="text" name="description" class="rounded-lg" value="{{$product->description}}">
            </div>

            <div class="container d-flex gap-4 flex justify-between">
                <a href="{{ route('user.profile', ['user' => $product->user->id]) }}" class="btn px-4 py-2 ml-4 bg-red-600 text-white rounded-lg w-auto">Cancelar</a>
                <button type="submit" class="px-4 py-2 bg-lime-600 w-auto border rounded-lg text-white">Guardar</button>
            </div>

        </form>

    </div>
</x-app-layout>
