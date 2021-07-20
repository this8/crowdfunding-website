<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\MessagesController;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function store(Request $request){
        Messages::create([
            'user_id' => auth()->user()->id,
            'message' => $request->message,
        ]);

        return back();
    }
}
