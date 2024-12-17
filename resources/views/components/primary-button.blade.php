<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full text-center flex justify-center px-4 py-3  border border-transparent rounded-md uppercase tracking-tight hover:bg-gray-700 hover:text-white focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
