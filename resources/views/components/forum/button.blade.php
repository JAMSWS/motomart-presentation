<button {{ $attributes->merge(['class' => 'bg-red-500 text-white px-3 py-2 rounded-md inline-block']) }}>
    {{ $slot }}
</button>
