<x-app-layout>
    <x-slot name="header">
        <a href="{{-- {{ route('tweets') }} --}}">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Inicio
            </x-nav-link>
            <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                Lotes
            </x-nav-link>
        </a>
    </x-slot>

    <div
        class="newsflex flex-wrap justify-center border border-gray-200 rounded-lg shadow-md max-w-3xl mt-4 mx-auto p-8  bg-white mb-8">
        <div class="mb-4">

            <p>"Vaquilandia" es un marketplace de ganado, donde vas a poder encontrar personas que vendan animales y que
                deseen comprar, por lo que tendras la posibilidad de subir tus lotes para poder conectar con ese comprador
                y , ademas, será una herramienta para poder encontrar lotes, si tu necesidad es de compra.
            En resumen, somos el intermediario confiable para tu crecimiento ganadero!
            </p>
        </div>

        <a class=" bg-orange-600 rounded-lg p-2 mt-10" href="{{route('shop')}}">Ir a ver lotes</a>

        <img class="rounded-lg mt-8" src="https://img.freepik.com/foto-gratis/ganado-holstein-pasta-belleza-prado-rural-generado-ia_188544-10582.jpg?w=740&t=st=1710963580~exp=1710964180~hmac=444bd5eedf22a96a37f9f0662f4a591de43e1cf172e7ed21a6ddd42852fd1149" alt="">
    </div>

   {{--  <div class="welcome-image min-w-5xl max-w-3xl mx-auto mb-8">
        <img class="rounded-lg " src="https://img.freepik.com/foto-gratis/ganado-holstein-pasta-belleza-prado-rural-generado-ia_188544-10582.jpg?w=740&t=st=1710963580~exp=1710964180~hmac=444bd5eedf22a96a37f9f0662f4a591de43e1cf172e7ed21a6ddd42852fd1149" alt="">
    </div> --}}

</x-app-layout>
