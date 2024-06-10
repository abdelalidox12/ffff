<?php

namespace App\Http\Controllers;

use App\Models\vol;
use App\Models\reservationvol;
use Illuminate\Http\Request;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request  $request)
    {
        $vols = Vol::all() ;
        return view('vols', compact("vols"));
    }

    public function index2(Request  $request)
    {
        $vols = Vol::all() ;
        return view('about', compact("vols"));
    }


    public function show(Request $request)
    {
        $vols = vol::all() ;
        $id = (int)$request->id;
        $vols = vol::findOrFail($id);
        return view('volcar' , compact('vols')) ;
    }


    // public function   search(Request $request){

    //     $search = $request->search;
    //     $query = vol::query();

    //     $query->whereAny([ 'Ville_depart' , 'Ville_arrivee ' , 'type' ,'date_depart','date_arrivée'  ] , 'LIKE' , "%$search%") ;

        
    //     // $query->orWhereHas( 'category' , function($query) use($search){
    //     //     $query->whereAny([ 'name' ] , ' LIKE ' ,"%$search%" ); });
     
    //   $vols =$query->get();

    //      return view('index', compact( 'vols'));}



    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $query = Vol::query();

    //     $query->where(function($query) use ($search) {
    //         $query->where('Ville_depart', 'LIKE', "%$search%")
    //               ->orWhere('Ville_arrivee', 'LIKE', "%$search%")
    //               ->orWhere('type', 'LIKE', "%$search%")
    //               ->orWhere('date_depart', 'LIKE', "%$search%")
    //               ->orWhere('date_arrivee', 'LIKE', "%$search%");
    //     });

    //     $vols = $query->get();

    //     return view('index', compact('vols'));
    // }

    // public function searchs(Request $request)
    // {
    //     $search = $request->input('search');
    //     $query = Vol::query();
    
    //     if ($search) {
    //         $query->where(function ($q) Vol ($search) {
    //             $q->where('Ville_depart', 'LIKE', "%$search%")
    //               ->orWhere('Ville_arrivee', 'LIKE', "%$search%")
    //               ->orWhere('type', 'LIKE', "%$search%")
    //               ->orWhere('date_depart', 'LIKE', "%$search%")
    //               ->orWhere('date_arrivée', 'LIKE', "%$search%");
    //         });
    //     }
    
    //     $vol = $query->get();
    
    //     return view('vv', compact('vol'));
    // }


    // public function searchs(Request $request)
    // {
    //     $request->validate(['search' =>  'required']);
    //     $search =  $request->q;
    //     $vo = vol::where('type', 'LIKE', '%' . $search . '%');
       
    

    //   if($search->count())  {
        
    //     return view('vv')->with(['vol' => $vo]);
    
    // }else {
    //     return view('vol')->with(['vo' => $vo]);
    //   }
       
    // }
       
    public function searchs( Request $request) {

        $request->validate([

            'type' => 'required'
        ]);

        $type = $request->type; 
        $Ville_depart = $request->country;  
        $Ville_arrivee = $request->state;   
        $date_depart = $request->date_depart;     
        $date_arrivée = $request->Ville_arrivee;   

        $vol = vol::where('type', 'like'           ,    '%' . $type . '%')
                   ->where('Ville_depart', 'LIKE'  ,    '%' . $Ville_depart . '%')
                   ->Where('Ville_arrivee', 'LIKE' ,    '%' . $Ville_arrivee . '%')
                   ->Where('date_depart', 'LIKE'   ,    '%' . $date_depart . '%')
                   ->Where('date_arrivee', 'LIKE'  ,    '%' .  $date_arrivée . '%')->get();
                                

        if ($vol->count()) {
            $vols = $vol;
            return view('vols', compact("vols"));
        } else {
            
            return redirect('/search')->with([
                'status' => 'search failed ,, please try again'
            ]);
        }
        
    }
       
    //     if ($search) {
    //         $query->where(function ($q) Vol ($search) {
    //             $q->where('Ville_depart', 'LIKE', "%$search%")
    //               ->orWhere('Ville_arrivee', 'LIKE', "%$search%")
    //               ->orWhere('type', 'LIKE', "%$search%")
    //               ->orWhere('date_depart', 'LIKE', "%$search%")
    //               ->orWhere('date_arrivée', 'LIKE', "%$search%");
    //         });
    //     }
    
    //     $vol = $query->get();
    
        
    // }


    // public function search(Request $request)
    // {
        
    //     $query = Vol::query();

    //     if ($request->has('search')) {
    //         $search = $request->input('search');
    //         $query->where(function($query) use ($search) {
    //             $query->where('Ville_depart', 'LIKE', "%$search%")
    //                   ->orWhere('Ville_arrivee', 'LIKE', "%$search%")
    //                   ->orWhere('type', 'LIKE', "%$search%")
    //                   ->orWhere('date_depart', 'LIKE', "%$search%")
    //                   ->orWhere('date_arrivee', 'LIKE', "%$search%");
    //         });
     

    //     if ($request->has('country')) {
    //         $country = $request->input('country');
    //         $query->where('Ville_depart', $country);
    //     }

    //     if ($request->has('state')) {
    //         $state = $request->input('state');
    //         $query->where('Ville_arrivee', $state);
    //     }

    //     if ($request->has('type')) {
    //         $type = $request->input('type');
    //         $query->where('type', $type);
    //     }

    //     if ($request->has('date_dep')) {
    //         $date_dep = $request->input('date_dep');
    //         $query->where('date_depart', $date_dep);
    //     }

    //     if ($request->has('date_arr')) {
    //         $date_arr = $request->input('date_arr');
    //         $query->where('date_arrivee', $date_arr);
    //     }

    //     $vol = $query;

    //     return view('vv', compact('vol'));}
    // else {

    //     return view('vols', compact('vo'));}
    // }
    
    /**
     * Show the form for creating a new resource.
     */








     public function store(Request $request)
     {
         $id_vols = $request->idcho;
 
         $Name = $request->Name;
         $phone = $request->Phone_no;
         $email = $request->Email;
         $sex = $request->sex;
         $prix = $request->price;
 
         $request->validate([]);
 
 
         reservationvol::create([
 
           'id_vols' =>  $id_vols ,

           'Name' =>  $Name ,
           'phone' =>  $phone ,
           'email' =>  $email ,
           'sex' =>  $sex ,
           'prix' =>  $prix ,
 
         ]);
 
         return redirect()->route('index');
 
     }

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
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vol $vol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vol $vol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vol $vol)
    {
        //
    }
}
