<x-app-layout>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Booking - '.  $booking->itemName ) }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
       Edit {{ $booking->itemName }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class = "editform">
                <h1> Edit {{ $booking->itemName }}</h1>
                {!! Form::open(['method' => 'put', 'route' => ['booking.update', $booking->id]]) !!}

                @error('itemName')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('itemName', 'Item Name: ') !!}
                    {!! Form::text('itemName', $booking->itemName, ['placeholder' => "Booking's name"]) !!}
                </p>

                @error('itemDosage')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('itemDosage', 'Item Dosage: ') !!}
                    {!! Form::text('itemDosage', $booking->itemDosage, ['placeholder' => "Booking's item dosage"]) !!}
                </p>

                @error('amount')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('amount', 'Item amount: ') !!}
                    {!! Form::text('amount', $booking->amount, ['placeholder' => "Booking's amount"]) !!}
                </p>

                @error('signaturePic')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('signaturePic', 'Item Signature Pic: ') !!}
                    {!! Form::text('signaturePic', $booking->signaturePic, ['placeholder' => "Booking's Signature Pic"]) !!}
                </p>

                @error('perscriptionPic')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('perscriptionPic', 'Item perscription pic: ') !!}
                    {!! Form::text('perscriptionPic', $booking->perscriptionPic, ['placeholder' => "Booking's Perscription Pic"]) !!}
                </p>

                @error('customerName')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('customerName', 'Item customer name: ') !!}
                    {!! Form::text('customerName', $booking->customerName, ['placeholder' => "Booking's customer Name"]) !!}
                </p>

                @error('customerAddress')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('customerAddress', 'Item customer Address: ') !!}
                    {!! Form::text('customerAddress', $booking->customerAddress, ['placeholder' => "Booking's customer Address"]) !!}
                </p>

                @error('driverID')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('driverID', 'Item driver: ') !!}
                    {!! Form::text('driverID', $booking->driverID, ['placeholder' => "Booking's driverID"]) !!}
                </p>

                @error('status')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('status', 'Status: ') !!}
                    {!! Form::text('status', $booking->status, ['placeholder' => "Booking's Status"]) !!}
                </p>

                {!! Form::submit('Update Booking', ['class' => 'hover:cursor-pointer button bg-warning']) !!}
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
