<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-t from-purple-800 via-black to-black flex items-center justify-center">
        <div class="w-full max-w-md bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold">Welcome back</h2>
                <p class="text-sm text-gray-300">Please login to your account</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="block mt-1 w-full bg-white/20 text-white placeholder-white border-none focus:ring-2 focus:ring-purple-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="block mt-1 w-full bg-white/20 text-white placeholder-white border-none focus:ring-2 focus:ring-purple-500" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 bg-white/10 text-purple-500 focus:ring-purple-400" name="remember">
                        <span class="ml-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-purple-400 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <x-primary-button class="w-full bg-gradient-to-r from-purple-600 to-purple-800 hover:opacity-90 text-white font-semibold">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="text-center mt-6">
                <p class="text-xs text-gray-400">Or sign in with</p>
                <div class="flex justify-center mt-3 gap-4">
                    <button class="bg-white/10 p-2 px-4 rounded hover:bg-white/20">G</button>
                    <button class="bg-white/10 p-2 px-4 rounded hover:bg-white/20"></button>
                </div>
                <p class="text-[10px] text-gray-400 mt-4">By logging in, you agree to our Terms & Privacy</p>
            </div>
        </div>
    </div>
</x-guest-layout>
