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


    <div class="flex justify-center border border-gray-200 rounded-lg shadow-md max-w-2xl mt-4 mx-auto p-8  bg-white mb-8">
        <form action="{{ route('shop.destroy', ['product' => $product->id]) }}" method="post">
            @csrf
            @method('delete')
            <h2 class="mb-2"><strong>Vas a eliminar tu producto: {{$product->name}}</strong></h2>

            <div class="container d-flex gap-4 flex justify-center">
                <a href="{{route('user.profile', ['user' => $product->user->id])}}" class="px-4 py-2 bg-amber-600 w-auto border rounded-lg text-white">Cancelar</a>
                <button type="submit" class="px-4 py-2 bg-red-600 w-auto border rounded-lg text-white">Eliminar</button>
            </div>
        </form>
    </div>
</x-app-layout>
