<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electronico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="localidad" :value="__('Localidad')" />
            <x-text-input id="localidad" class="block mt-1 w-full" type="text" name="localidad" :value="old('localidad')" required autocomplete="localidad" />
            <x-input-error :messages="$errors->get('localidad')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="departamento" :value="__('Departamento')" />
            <x-text-input id="departamento" class="block mt-1 w-full" type="text" name="departamento" :value="old('departamento')" required autocomplete="departamento" />
            <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="provincia" :value="__('Provincia')" />
            <x-text-input id="provincia" class="block mt-1 w-full" type="text" name="provincia" :value="old('provincia')" required autocomplete="provincia" />
            <x-input-error :messages="$errors->get('provincia')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="tel" :value="__('Telefono')" />
            <x-text-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('tele')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Ya registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
