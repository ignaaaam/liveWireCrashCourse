<button 
    class="rounded-md bg-pink-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-pink-500 transition-colors"
    type="submit"
    wire:click='{{ $click }}'>
    {{ $button }}
</button>

<div wire:loading>
    <x-spinner />
</div>