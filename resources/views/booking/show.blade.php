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
                </div>
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
