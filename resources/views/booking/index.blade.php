<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Bookings
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Auth::user()->role == 'ODSAdministrator' || Auth::user()->role == 'SYSAdministrator')
                <div class="text-center">
                    Item Name - Customer name - Driver name
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @foreach ($bookings as $booking)
                        @foreach ($drivers as $driver)
                            @if ($booking->driverID == $driver->id)
                                <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                                    {!! Form::open(['method' => 'get', 'route' => ['booking.show', $booking->id]]) !!}
                                    {!! Form::submit($booking->itemName . '    ' . $booking->customerName . '    ' . $driver->name) !!}
                                    {!! Form::close() !!}
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                @else
                    <div class="text-center">
                        Item name - Customer name - Customer Address</div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        @foreach ($bookings as $booking)
                            <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                                {!! Form::open(['method' => 'get', 'route' => ['booking.show', $booking->id]]) !!}
                                {!! Form::submit($booking->itemName . '    ' . $booking->customerName . '    ' . $booking->customerAddress) !!}
                                {!! Form::close() !!}
                            </div>
                        @endforeach

            @endif
        </div>
        @if (Auth::user()->role == 'ODSAdministrator' || Auth::user()->role == 'SYSAdministrator')
            <div class="custom-center mt-5">
                {!! Form::open(['method' => 'get', 'route' => ['booking.create']]) !!}
                {!! Form::submit('Create new Booking', ['class' => 'hover:cursor-php pointer button bg-ok']) !!}
                {!! Form::close() !!}
            </div>
        @endif
    </div>
    </div>
</x-app-layout>
