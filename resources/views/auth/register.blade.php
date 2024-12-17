<x-guest-layout>
    <div class="w-full max-w-[540px] px-[20px] lg:px-0">
        <div class="head text-center mb-[30px]">
            <x-application-logo class="text-[32px] font-bold text-black block text-center lg:hidden mb-6" href="/" />
            <h2 class="text-[26px] font-bold text-black">Register with your Credentials</h2>
            <p class="text-[14px] text-black font-normal mt-[10px]">Sign up to start your session</p>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-[16px] text-black font-semibold mb-[0]" />
                <x-text-input id="name"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="Enter your name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-[16px] text-black font-semibold mb-[0]" />
                <x-text-input id="email"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="email" name="email" :value="old('email')" required autocomplete="username"
                    placeholder="Enter valid email address" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"
                    class="text-[16px] text-black font-semibold mb-[0]" />
                <x-text-input id="password"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="password" name="password" required autocomplete="new-password"
                    placeholder="Enter password here" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                    class="text-[16px] text-black font-semibold mb-[0]" />
                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="password" name="password_confirmation" required autocomplete="new-password"
                    placeholder="Confirm your password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <a wire.navigate class="underline text-sm text-blue-600 flex mt-4 justify-end w-full hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <div class="flex justify-between items-center mt-4">

                <x-primary-button class=" bg-blue-100 text-blue-600 font-[800] text-[18px]">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
        <div class="flex mt-3 justify-between gap-3">
            <a wire.navigate class="bg-green-100 text-green-400 font-bold text-[18px] w-full text-center flex justify-center px-4 py-3 border border-green-400 rounded-md tracking-tight hover:bg-gray-700 hover:text-white focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 flex justify-center items-center"
                href="/">
                {{ __('Register as subcontractor') }}
            </a>
            <a wire.navigate class="bg-transparent text-green-400 font-bold text-[18px] w-full max-w-[145px] text-center flex justify-center px-4 py-3 border border-green-400 rounded-md tracking-tight hover:bg-gray-700 hover:text-white focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 flex justify-center items-center"
                href="/">
                {{ __('Jobs') }}
            </a>
        </div>
    </div>
</x-guest-layout>
