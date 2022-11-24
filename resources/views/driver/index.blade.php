<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Drivers') }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Drivers
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($drivers as $driver)
                    <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                        {!! Form::open(['method' => 'get', 'route' => ['driver.show', $driver->id]]) !!}
                        {!! Form::submit($driver->name) !!}
                        {!! Form::close() !!}
                    </div>
                @endforeach
            </div>
            @if (Auth::user()->role == 'SYSAdministrator')
                <div class="custom-center mt-5">
                    {!! Form::open(['method' => 'get', 'route' => ['driver.create']]) !!}
                    {!! Form::submit('Create new Driver', ['class' => 'hover:cursor-php pointer button bg-ok']) !!}
                    {!! Form::close() !!}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
