<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin - ' . $admin->name) }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        {{ $admin->name }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="driver-show-email">
                    email: {{ $admin->email }}
                </div>
            </div>
            <div class="row-spacebetween">
                {!! Form::open(['method' => 'get', 'route' => ['admin.edit', $admin->id]]) !!}
                {!! Form::submit('Edit', ['class' => 'hover:cursor-pointer button bg-danger']) !!}
                {!! Form::close() !!}

                {!! Form::open(['method' => 'delete', 'route' => ['admin.destroy', $admin->id]]) !!}
                {!! Form::submit('Delete', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
