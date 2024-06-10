<?php

namespace App\Http\Controllers;
use App\Models\hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1(Request  $request)
    {
        $hotels = Hotel::all() ;
        return view('accuiel', compact("hotels"));
    }

    public function index(Request  $request)
    {
        $hotels = Hotel::all() ;
        return view('hotels', compact("hotels"));
    }



    // public function index31(Request  $request)
    // {
    //     $hotels = Hotel::all() ;
    //     return view('reservation');
    // }

    // public function index32(Request  $request)
    // {
    //     $hotels = Hotel::all() ;
    //     return view('partials.part2');
    // }

    // public function index33(Request  $request)
    // {
    //     $hotels = Hotel::all() ;
    //     return view('partials.part');
    // }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $hotels = Hotel::all() ;
        $id = (int)$request->id;
        $produit = Hotel::findOrFail($id);
        return view('hotelcart' , compact('produit')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}
