<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    function __construct()
    {
        $this->middleware('driver.access:SYSAdministrator,ODSAdministrator,driver,user')->only(['index', 'show']);

        $this->middleware('driver.access:SYSAdministrator,ODSAdministrator,null,null')->only(['create', 'store', 'edit', 'update', 'delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $bookings = null;
        if ($user->role == "ODSAdministrator" || $user->role == "SYSAdministrator") {
            $bookings = Booking::all();
        } else if ($user->role == "driver") {
            $bookings = Booking::all()->where('driverID', '=', $user->id);
            Log::info("ok");
        } else{
            $bookings = Booking::all()->where('customerName', '=', $user->name);
        }
        
        $drivers = User::all()->where('role', '=', 'driver');
        return view('booking/index')->with('bookings', $bookings)->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = User::all()->where('role', '=', 'driver');
        return view('booking/create')->with('drivers', $drivers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create([
            'driverID' => $request->driverID,
            'itemName' => $request->itemName,
            'itemDosage' => $request->itemDosage,
            'amount' => $request->amount,
            'signaturePic' => $request->signaturePic,
            'perscriptionPic' => $request->perscriptionPic,
            'customerName' => $request->customerName,
            'customerAddress' => $request->customerAddress,
            'status' => "Awaiting Payment",
        ]);

        return redirect(url('booking'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking/show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking/edit')->with('booking', $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->driverID = $request->driverID;
        $booking->itemName = $request->itemName;
        $booking->itemDosage = $request->itemDosage;
        $booking->amount = $request->amount;
        $booking->signaturePic = $request->signaturePic;
        $booking->perscriptionPic = $request->perscriptionPic;
        $booking->customerName = $request->customerName;
        $booking->customerAddress = $request->customerAddress;
        $booking->status = $request->status;
        $booking->save();
        return redirect(url('booking'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }

    /**
     * Make Payment to booking
     *
     * @return \Illuminate\Http\Response
     */
    public function inProgress(Request $request)
    {
        $booking = Booking::find($request->id);
        $booking->status = "In Progress";
        $booking->save();
        return redirect(url('booking'));
    }

    /**
     * Make Payment to booking
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        $booking = Booking::find($request->id);
        $booking->status = "Paid";
        $booking->save();
        return redirect(url('booking'));
    }

    /**
     * Make Payment to booking
     *
     * @return \Illuminate\Http\Response
     */
    public function refund(Request $request)
    {
        $booking = Booking::find($request->id);
        $booking->status = "Refunded";
        $booking->save();
        return redirect(url('booking'));
    }

    /**
     * Make Payment to booking
     *
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {
        $booking = Booking::find($request->id);
        $booking->status = "Completed";
        $booking->save();
        return redirect(url('booking'));
    }
}
