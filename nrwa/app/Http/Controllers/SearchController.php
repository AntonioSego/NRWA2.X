<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Implement your search logic here
        $query = $request->input('query');

        // Return search results (e.g., as JSON)
        $results = Product::where('product_name', 'like', '%' . $query . '%')->get();

        return response()->json(['results' => $results]);
    }
}
