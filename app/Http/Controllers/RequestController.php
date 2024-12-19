<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index()
    {
        $requests = ModelsRequest::where('user_id', Auth::user()->id)->get();
        $userId = Auth::id();

        return view('request.index', compact('requests', 'userId'));;
    }

    public function create() {
        $cars = Car::where("user_id",Auth::user()->id)->get();
        return view('request.create', compact('cars'));
    }

    public function store(Request $req, ModelsRequest $request): RedirectResponse {
        $data = $req->validate([
            "problem"=>"",
            "repair_date"=>"",
            "user_id"=>"",
            "car_id"=>"",
        ]);

        $request->create($data);


        return redirect()->route("request.index")->with('info', 'Заявление отправлено');
    }

    public function update(Request $request) {
        $request->validate([
            'car_id' => ['required'],
            'user_id' => ['required'],
            'id' => ['required']
        ]);

        ModelsRequest::where('id', $request->id)->update([
            'repaire_date' => $request->repaire_date,
        ]);
        return redirect()->back();
    }
}
