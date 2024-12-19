<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
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
}
