<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{    public function index(){
        $requests = ModelsRequest::all();
        $userId = Auth::id();
        return view('admin.index', compact('requests', 'userId'));
    }
}
