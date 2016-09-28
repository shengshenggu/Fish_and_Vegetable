<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Plant;

class PlantController extends Controller
{
    public function index() {
    	return view('plant.home');
    }

    public function library() {
    	$plants = Plant::all();
    	return view('plant.library', ['plants' => $plants]);
    }
}
