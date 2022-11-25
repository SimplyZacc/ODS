<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Users
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($users as $user)
                    <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                        {!! Form::open(['method' => 'get', 'route' => ['user.show', $user->id]]) !!}
                        {!! Form::submit($user->name) !!}
                        {!! Form::close() !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
