<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PartyResource;
use App\Http\Resources\PartyCollection;
use App\Party;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new PartyCollection(Party::all());
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $party = Party::with('candidate')->find($id);
        if(!$party){
            return response()->json([
                'error'=> 404,
                'message'=> 'Not found'
            ], 404);
        }
        
        return new PartyResource($party);
    }
}
