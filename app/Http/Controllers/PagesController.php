<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('category.Heart');
    }

    public function Cancer(){
        return view('category.Cancer');
    }

    public function Vision(){
        return view('category.Vision');
    }

    public function Infants(){
        return view('category.Infants');
    }
}
