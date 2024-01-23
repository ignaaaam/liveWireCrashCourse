<div>
        @if(session()->has('message'))
            <div class="p-4 mb-4 text-sm w-2/6 mx-auto text-green-800 rounded-lg bg-green-50" role="alert">
                <span class="font-medium">
                    Success Alert
                </span>
                <strong class="font-bold">{{ session('message') }}</strong>
            </div>
    @endif
</div>