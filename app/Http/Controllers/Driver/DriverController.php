<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    function __construct()
    {
        $this->middleware('driver.access:SYSAdministrator,ODSAdministrator,driver,null')->only(['index', 'show']);

        $this->middleware('driver.access:SYSAdministrator,null,null,null')->only(['create', 'store', 'edit', 'update', 'delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = User::all()->where('role', '=', 'driver');
        return view('driver/index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'role' => 'driver',
        ]);

        return redirect(url('driver'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = User::findOrFail($id);
        return view('driver/show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = User::findOrFail($id);
        return view('driver/edit')->with('driver', $driver);
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
        $driver = User::find($id);
        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->save();
        return redirect(url('driver'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = User::findOrFail($id);
        $driver->delete();
        return redirect()->route('driver.index');
    }
}
