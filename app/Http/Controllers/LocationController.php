<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function storeLocation(Request $request)
    {
        $user_Id = Auth::user()->id;
        $validateData = $request->validate();
        $validateData['user_id'] = $user_Id;
        $location = Location::create($validateData);
        return response()->json($location, 201);
    }
}
