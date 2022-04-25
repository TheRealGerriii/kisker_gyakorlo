<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index() {

        $pets = Pet::all();
        return view("/list_pets", [
            "pets" => $pets
        ]);
    }
    public function new() {
        return view("/new_pet");
    }
    public function store(Request $request) {
        $pet = new Pet;

        $pet->pet = $request->pet;
        $pet->type = $request->type;
        $pet->price = $request->price;

        $pet->save();
        return redirect("/");
    }
    public function delete($id){
        
        $pet = Pet::find($id);
        $pet->delete();

        return redirect("/");
    }
    public function view_update($id) {
        
        $pet = Pet::find($id);

        return view( "modify", [
            "pet" => $pet
        ]);
    }
    public function update( Request $request) {

        $pet = Pet::find( $request[ "pet_id" ]);

        $pet->pet = $request["pet"];
        $pet->type = $request["type"];
        $pet->price = $request["price"];

        $pet->save();

        return redirect("/");
    }
    public function search( Request $request) {
        $pets = Pet::where("type", $request->type)->get();

        return view("/list_pets", [
            "pets" => $pets
        ]);
    }
}
