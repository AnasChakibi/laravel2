<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getData()
    {

        return [
            ["id"=>"1","name"=>"asus","type"=>"laptop","price"=>"123"],
            ["id"=>"2","name"=>"msi","type"=>"gamer","price"=>"555"],
            ["id"=>"3","name"=>"asrock","type"=>"gamerpro","price"=>"999"]
        ]; 
    }

    public function index()
    {
        return view('computer.index',["computers"=>self::getData()]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        
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
    public function edit(string $id)
    {
        return "shit";
    }
    
    public function show(string $id)
    {
        /*
        $computers=self::getData();
        $index=array_search($id,array_column($computers,"id"));

        
        return view("computer.show",["computer"=>$computers[$index]]);*/
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
