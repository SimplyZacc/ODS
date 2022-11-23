<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (Auth::user()->role == 'ODSAdministrator')
                    <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                        {!! Form::open(['method' => 'get', 'route' => ['admin.index']]) !!}
                        {!! Form::submit('Admins', ['class' => 'hover:cursor-pointer']) !!}
                        {!! Form::close() !!}
                    </div>
                @endif
                <div class="p-6 bg-gray-500 border-b border-gray-200 hover:cursor-pointer text-center">
                    {!! Form::open(['method' => 'get', 'route' => ['driver.index']]) !!}
                    {!! Form::submit('Drivers', ['class' => 'hover:cursor-pointer']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                    {!! Form::open(['method' => 'get', 'route' => ['booking.index']]) !!}
                    {!! Form::submit('Bookings', ['class' => 'hover:cursor-pointer']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
