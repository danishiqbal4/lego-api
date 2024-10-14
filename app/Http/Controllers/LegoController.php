<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LegoController extends Controller
{
    // Function to get the details of a specific LEGO set
    public function getLegoSet($setId)
    {
        // Rebrickable API to fetch data for a given set
        $apiKey = env('REBRICKABLE_API_KEY');
        $response = Http::get("https://rebrickable.com/api/v3/lego/sets/{$setId}/parts/", [
            'key' => $apiKey
        ]);

        // Return JSON response to frontend
        return response()->json($response->json());
    }
}
