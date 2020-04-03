<?php

namespace App\Http\Controllers;

use App\Address;
use App\Adress;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formAddAddress');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $address = new Address();
        //dd($request->except(['_token']));
        $address->create($request->except(['_token']));

        return redirect(route('address.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //

        return view('listAddress', ['address'=>$address]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
