<x-app-layout>
    @if(Auth::user()->type == 'superuser')
        @livewire('admin-dashboard')
    @elseif(Auth::user()->type == 'teacher')
        <p> Teacher Dashboard Here </p>
    @elseif(Auth::user()->type == 'student')
        <p> Student Dashboard Here </p>
    @endif
</x-app-layout>