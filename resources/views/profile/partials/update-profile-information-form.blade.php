<section>
    <header>
        <h2 class="text-lg font-medium text-black dark:text-dark">
            {{ __('Datos de perfil') }}
        </h2>

        <p class="mt-1 text-sm text-black dark:text-black">
            {{ __("Actualiza tus datos de perfil") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="localidad" :value="__('Localidad')" />
            <x-text-input id="localidad" name="localidad" type="text" class="mt-1 block w-full" :value="old('localidad', $user->localidad)"  autofocus autocomplete="localidad" />
            <x-input-error class="mt-2" :messages="$errors->get('localidad')" />
        </div>
        <div>
            <x-input-label for="provincia" :value="__('Provincia')" />
            <x-text-input id="provincia" name="provincia" type="text" class="mt-1 block w-full" :value="old('provincia', $user->provincia)" autofocus autocomplete="provincia" />
            <x-input-error class="mt-2" :messages="$errors->get('provincia')" />
        </div>
        <div>
            <x-input-label for="departamento" :value="__('Departamento')" />
            <x-text-input id="departamento" name="departamento" type="text" class="mt-1 block w-full" :value="old('departamento', $user->departamento)"  autofocus autocomplete="departamento" />
            <x-input-error class="mt-2" :messages="$errors->get('departamento')" />
        </div>
        <div>
            <x-input-label for="tel" :value="__('Teléfono')" />
            <x-text-input id="tel" name="tel" type="text" class="mt-1 block w-full" :value="old('tel', $user->tel)"  autofocus autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('tel')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo electronico')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click aqui para reenviar el correo de verificacion.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Un nuevo link de verificacion fue enviado a tu correo.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>
