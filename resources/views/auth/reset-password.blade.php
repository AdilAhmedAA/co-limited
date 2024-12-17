<x-guest-layout>
    <div class="w-full max-w-[540px] px-[20px] lg:px-0">
        <div class="head text-center mb-[30px]">
            <x-application-logo class="text-[32px] font-bold text-black block text-center lg:hidden mb-6" href="/" />
            <h2 class="text-[26px] font-bold text-black">Reset Your Password</h2>
            <p class="text-[14px] text-black font-normal mt-[10px]">Please choose a new password to continue.</p>
        </div>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div>
                <x-input-label for="email" :value="__('Email')"
                    class="text-[16px] text-black font-semibold font-normal mb-[0]" />
                <x-text-input id="email"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="email" name="email" :value="old('email', $request->email)" required autofocus
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"
                    class="text-[16px] text-black font-semibold font-normal mb-[0]" />
                <x-text-input id="password"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="password" name="password" required autocomplete="new-password"
                    placeholder="Enter your new password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                    class="text-[16px] text-black font-semibold font-normal mb-[0]" />
                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="password" name="password_confirmation" required autocomplete="new-password"
                    placeholder="Confirm your new password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="flex justify-end mt-6">
                <x-primary-button class="bg-blue-100 text-blue-600 font-[800] text-[18px]">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>