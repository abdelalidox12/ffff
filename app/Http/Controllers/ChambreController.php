<?php

namespace App\Http\Controllers;

use App\Models\chambre;

use App\Models\reservation;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
    public function index1(Request  $request)
    {
        $hotels = chambre::all() ;
        return view('accuiel', compact("hotels"));
    }

    public function index(Request  $request)
    {
        $hotels = chambre::all() ;
        return view('hotels', compact("hotels"));
    }


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
        $id_chambres = $request->idcho;
        $Date_debut = $request->Check_in;
     
        $date_depart = $request->Check_out;
       
        $Name = $request->Name;
        $phone = $request->Phone_no;
        $email = $request->Email;
        $sex = $request->sex;
        $prix = $request->price;

        $request->validate([]);


        reservation::create([

          'id_chambres' =>  $id_chambres ,
          'Date_debut' =>  $Date_debut ,
          'date_depart' =>  $date_depart ,
          'Name' =>  $Name ,
          'phone' =>  $phone ,
          'email' =>  $email ,
          'sex' =>  $sex ,
          'prix' =>  $prix ,

        ]);

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request  $request)
    {
        $hotels = chambre::all() ;
        $id = (int)$request->id;
        $produit = chambre::findOrFail($id);
        return view('hotelcart' , compact('produit')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chambre $chambre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chambre $chambre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chambre $chambre)
    {
        //
    }
}
