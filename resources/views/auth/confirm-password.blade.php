<x-guest-layout>
    <div class="w-full max-w-[540px] px-[20px] lg:px-0">
        <div class="head text-center mb-[30px]">
            <x-application-logo class="text-[32px] font-bold text-black block text-center lg:hidden mb-6" href="/" />
            <h2 class="text-[26px] font-bold text-black">Confirm Your Password</h2>
            <p class="text-[14px] text-black font-normal mt-[10px]">This is a secure area of the application. Please
                confirm your password before continuing.</p>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-input-label for="password" :value="__('Password')"
                    class="text-[16px] text-black font-semibold font-normal mb-[0]" />
                <x-text-input id="password"
                    class="block mt-1 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b pt-0 border-black rounded-none placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-black shadow-none pl-0"
                    type="password" name="password" required autocomplete="current-password"
                    placeholder="Enter your password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-6">
                <x-primary-button class="bg-blue-100 text-blue-600 font-[800] text-[18px]">
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
