<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User - '.  $user->name ) }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        {{ $user->name }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="driver-show-email">
                    email: {{ $user->email }}
                </div>
            </div>
            @if (Auth::user()->role == 'SYSAdministrator')
            <div class="row-spacebetween">
                {!! Form::open(['method' => 'get', 'route' => ['user.edit', $user->id]]) !!}
                {!! Form::submit('Edit', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                {!! Form::close() !!}

                {!! Form::open(['method' => 'delete', 'route' => ['user.destroy', $user->id]]) !!}
                {!! Form::submit('Delete', ['class' => 'hover:cursor-pointer button bg-danger']) !!}
                {!! Form::close() !!}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
