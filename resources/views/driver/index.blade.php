<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (Auth::user()->role == 'ODSAdministrator')
                {!! Form::open(['method' => 'get', 'route' => ['driver.create']]) !!}
                {!! Form::submit('Create new Driver', ['class' => 'hover:cursor-php pointer button bg-ok']) !!}
                {!! Form::close() !!}
            @endif
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
        </div>
    </div>
</x-app-layout>
