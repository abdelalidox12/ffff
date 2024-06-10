<?php

namespace App\Http\Controllers;

use App\Models\reservationvoyage;
use App\Models\voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request  $request)
    {
        $hotels = voyage::all() ;
        return view('voyages', compact("hotels"));
    }

    




    public function search( Request $request) {

        $request->validate([

            'type' => 'required',
           
        ]);

        $type = $request->type; 
        $Ville_depart = $request->country;   
        $date_depart = $request->date_depart;     
        

        $vol = voyage::where('N_jour', 'like'           ,    '%' . $type . '%')
                   ->where('Ville_depart', 'LIKE'  ,    '%' . $Ville_depart . '%')
                   ->Where('date_depart', 'LIKE'   ,    '%' . $date_depart . '%')->get();
              
                                
        if ($vol->count()) {
            $hotels = $vol;
            return view('tou', compact("hotels"));
        } else {
            
            return redirect('/search')->with([
                'status' => 'search failed ,, please try again'
            ]);
        }
        
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


    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {
        $voyages = voyage::all() ;
        $id = (int)$request->id;
        $produitv = voyage::findOrFail($id);
        return view('voyagecart' , compact('produitv')) ;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(voyage $voyage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, voyage $voyage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(voyage $voyage)
    {
        //
    }



    public function store(Request $request)
    {
        $id_voyages = $request->idvoy;      
        $Name = $request->name;

        $sex = $request->sex;
        $email = $request->email;
        $phone = $request->phone;
        $prix = $request->price;

        $request->validate([]);


        reservationvoyage::create([

          'id_voyages' =>  $id_voyages ,
          'Name' =>  $Name ,
          'phone' =>  $phone ,
          'email' =>  $email ,
          'sex' =>  $sex ,
          'prix' =>  $prix ,

        ]);

        return redirect()->route('index');

    }
}
