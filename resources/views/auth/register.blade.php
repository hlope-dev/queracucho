<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="primer_apellido" :value="__('Primer Apellido')" />
            <x-text-input id="primer_apellido" class="block mt-1 w-full" type="text" name="primer_apellido" :value="old('primer_apellido')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('primer_apellido')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="segundo_apellido" :value="__('Segundo Apellido')" />
            <x-text-input id="segundo_apellido" class="block mt-1 w-full" type="text" name="segundo_apellido" :value="old('segundo_apellido')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('segundo_apellido')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="direccion" :value="__('Direccion')" />
            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" pattern="[9]{1}[0-9]{8}" maxlength="9" name="telefono" :value="old('telefono')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('¿Que rol tendra en la comunidad?')" />
            <select
                id="rol"
                name="rol"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">-- Selecciona una opción --</option>
                <option value="1">Socio</option>
                <option value="2">Administrador </option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
            <x-input-label for="password_confirmation" :value="__('Repetir Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-between m-5">
            <x-link
                href="{{ route('login') }}">
                Iniciar Sesión
            </x-link>

            <x-link
                href="{{ route('password.request') }}">
                Olvidaste tu contraseña?
            </x-link>

        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('Crear Cuenta') }}
        </x-primary-button>
    </form>
</x-guest-layout>
