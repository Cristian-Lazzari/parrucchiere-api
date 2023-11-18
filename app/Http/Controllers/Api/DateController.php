<?php

namespace App\Http\Controllers\Api;

use App\Models\Date;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DateController extends Controller
{
   
    public function index() {
        $dates = Date::all();

        return response()->json([
            'success' => true,
            'results' => $dates,
        ]);
    }
        
}
