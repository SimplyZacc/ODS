<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Admin') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {!! Form::open(['method' => 'post', 'route' => 'admin.store']) !!}

                        @error('name')
                            <div class="">{{ $message }}</div>
                        @enderror

                        <p>
                            {!! Form::label('name', 'Name: ') !!}
                            {!! Form::text('name', '', ['placeholder' => "Admin's name"]) !!}
                        </p>

                        @error('email')
                            <div class="">{{ $message }}</div>
                        @enderror

                        <p>
                            {!! Form::label('email', 'Email: ') !!}
                            {!! Form::email('email', '', ['placeholder' => "Admin's email"]) !!}
                        </p>

                        @error('password')
                            <div class="">{{ $message }}</div>
                        @enderror

                        <p>
                            {!! Form::label('password', 'Password: ') !!}
                            {!! Form::password('password', ['placeholder' => "Admin's password"]) !!}
                        </p>

                        {!! Form::submit('Add admin', ['class' => 'hover:cursor-pointer button bg-danger']) !!}
                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
