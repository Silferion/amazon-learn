<x-app-layout>
    @if(Auth::user()->type == 'superuser')
        @livewire('admin-rc')
    @else
        <h1 class="text-center"> 401 Unauthorized </h1>
        {{-- <script> window.location = '/dashboard' </script> --}}
    @endif
</x-app-layout>