<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Edit {{$driver->name}}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {!! Form::open(['method' => 'put', 'route' => ['driver.update', $driver->id]]) !!}

                @error('name')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('name', 'Name: ') !!}
                    {!! Form::text('name', $driver->name, ['placeholder' => "Driver's name"]) !!}
                </p>

                @error('email')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::text('email', $driver->email, ['placeholder' => "Driver's email"]) !!}
                </p>

                {!! Form::submit('Edit driver', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
