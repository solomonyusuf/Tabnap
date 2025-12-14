@if(Route::is('dashboard'))
 <script src="https://cdn.tailwindcss.com"></script>
@endif

@livewireStyles

{{ $slot }}

@livewireScripts