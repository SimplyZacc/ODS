<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Driver - '.  $driver->name ) }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        {{ $driver->name }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="driver-show-email">
                    email: {{ $driver->email }}
                </div>
            </div>
            @if (Auth::user()->role == 'SYSAdministrator')
            <div class="row-spacebetween">
                {!! Form::open(['method' => 'get', 'route' => ['driver.edit', $driver->id]]) !!}
                {!! Form::submit('Edit', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                {!! Form::close() !!}

                {!! Form::open(['method' => 'delete', 'route' => ['driver.destroy', $driver->id]]) !!}
                {!! Form::submit('Delete', ['class' => 'hover:cursor-pointer button bg-danger']) !!}
                {!! Form::close() !!}
                
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
