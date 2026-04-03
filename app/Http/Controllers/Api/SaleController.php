<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() { 
        // Loads the location details with the sale
        return response()->json(Sale::with('location')->get()); 
    }
    
    public function store(Request $request) {
        $item = Sale::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(Sale::with('location')->findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = Sale::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        Sale::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}