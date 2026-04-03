<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index() { return response()->json(Purchase::all()); }
    
    public function store(Request $request) {
        $item = Purchase::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(Purchase::findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = Purchase::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        Purchase::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}