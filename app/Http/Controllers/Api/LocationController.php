<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index() { return response()->json(Location::all()); }
    
    public function store(Request $request) {
        $item = Location::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(Location::findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = Location::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        Location::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}