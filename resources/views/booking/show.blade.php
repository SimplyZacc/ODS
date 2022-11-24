<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking - ' . $booking->itemName) }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        {{ $booking->itemName }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="driver-show-email">
                    Item Name: {{ $booking->itemName }}
                    <br>
                    Dosage: {{ $booking->itemDosage }}
                    <br>
                    Amount: {{ $booking->amount }}
                    <br>
                    Customer Name: {{ $booking->customerName }}
                    <br>
                    Customer Address: {{ $booking->customerAddress }}
                    <br>
                    Signature: <img src={{ $booking->signaturePic }} alt="Signature">
                    <br>
                    Perscription Pic: <img src={{ $booking->perscriptionPic }} alt="Signature">
                    <br>
                    Status: {{ $booking->status }}
                </div>

                @if (Auth::user()->role == 'user')
                    @if ($booking->status == 'Awaiting Payment')
                        {!! Form::open(['method' => 'post', 'route' => 'booking.payment']) !!}
                        {!! Form::hidden('id', $booking->id) !!}
                        {!! Form::submit('Make Payment', ['class' => 'hover:cursor-pointer button bg-success']) !!}
                        {!! Form::close() !!}
                    @elseif ($booking->status == 'Paid')
                        {!! Form::open(['method' => 'post', 'route' => 'booking.refund']) !!}
                        {!! Form::hidden('id', $booking->id) !!}
                        {!! Form::submit('Refund Payment', ['class' => 'hover:cursor-pointer button bg-success']) !!}
                        {!! Form::close() !!}
                    @endif
                @elseif (Auth::user()->role == 'driver')
                
                    @if ($booking->status == 'Paid')
                        {!! Form::open(['method' => 'post', 'route' => 'booking.inProgress']) !!}
                        {!! Form::hidden('id', $booking->id) !!}
                        {!! Form::submit('Start Delivery', ['class' => 'hover:cursor-pointer button bg-success']) !!}
                        {!! Form::close() !!}
                    @elseif ($booking->status == 'In Progress')
                        {!! Form::open(['method' => 'post', 'route' => 'booking.complete']) !!}
                        {!! Form::hidden('id', $booking->id) !!}
                        {!! Form::submit('Complete Booking', ['class' => 'hover:cursor-pointer button bg-success']) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
            </div>
            @if (Auth::user()->role == 'ODSAdministrator')
                <div class="row-spacebetween">
                    {!! Form::open(['method' => 'get', 'route' => ['booking.edit', $booking->id]]) !!}
                    {!! Form::submit('Edit', ['class' => 'hover:cursor-pointer button bg-danger']) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'delete', 'route' => ['booking.destroy', $booking->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                    {!! Form::close() !!}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
