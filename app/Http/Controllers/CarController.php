<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index (){
        $cars = Car::where("user_id",Auth::user()->id)->get();
        return view("car.index", compact("cars"));
    }

    public function store(Request $req, Car $car){
        $data = $req->validate([
            "user_id"=>"",
            "number"=>"",
            "mark"=>"",
            "model"=>""
        ]);

        $car->create($data);

        return redirect()->route("car.index");
    }

    public function create(){
        return view("car.create");
    }
}
