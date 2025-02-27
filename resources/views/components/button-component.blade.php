<button 
    type="{{ $type ?? 'button' }}" 
    class="{{ $classes }} btn btn__{{ $variant ?? 'Default' }}">
    {{ $slot }}
</button>