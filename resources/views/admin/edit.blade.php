<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Admin - '.  $admin->name ) }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Edit {{ $admin->name }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {!! Form::open(['method' => 'put', 'route' => ['admin.update', $admin->id]]) !!}

                @error('name')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('name', 'Name: ') !!}
                    {!! Form::text('name', $admin->name, ['placeholder' => "Admin's name"]) !!}
                </p>

                @error('email')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('email', 'Email: ') !!}
                    {!! Form::text('email', $admin->email, ['placeholder' => "Admin's email"]) !!}
                </p>

                {!! Form::submit('Edit admin', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
