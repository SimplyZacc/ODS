<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Booking') }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Add Booking
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['method' => 'post', 'route' => 'booking.store']) !!}

                    @error('itemName')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('itemName', 'Item Name: ') !!}
                        {!! Form::text('itemName', '', ['placeholder' => "Booking's name"]) !!}
                    </p>

                    @error('itemDosage')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('itemDosage', 'Item Dosage: ') !!}
                        {!! Form::text('itemDosage', '', ['placeholder' => "Booking's item dosage"]) !!}
                    </p>

                    @error('amount')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('amount', 'Item amount: ') !!}
                        {!! Form::text('amount', '', ['placeholder' => "Booking's amount"]) !!}
                    </p>

                    @error('signaturePic')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('signaturePic', 'Item Signature Pic: ') !!}
                        {!! Form::text('signaturePic', '', ['placeholder' => "Booking's Signature Pic"]) !!}
                    </p>

                    @error('perscriptionPic')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('perscriptionPic', 'Item perscription pic: ') !!}
                        {!! Form::text('perscriptionPic', '', ['placeholder' => "Booking's Perscription Pic"]) !!}
                    </p>

                    @error('customerName')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('customerName', 'Item customer name: ') !!}
                        {!! Form::text('customerName', '', ['placeholder' => "Booking's customer Name"]) !!}
                    </p>

                    @error('customerAddress')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('customerAddress', 'Item customer Address: ') !!}
                        {!! Form::text('customerAddress', '', ['placeholder' => "Booking's customer Address"]) !!}
                    </p>

                    @error('driverID')
                        <div class="">{{ $message }}</div>
                    @enderror

                    <p>
                        {!! Form::label('driverID', 'Item driver: ') !!}
                        <select name="driverID" id="driverID">
                            @foreach ($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                            @endforeach
                        </select>
                    </p>

                    {!! Form::submit('Add driver', ['class' => 'hover:cursor-pointer button bg-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
