<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClosingStatement;
use Illuminate\Http\Request;

class ClosingStatementController extends Controller
{
    public function index() { return response()->json(ClosingStatement::all()); }
    
    public function store(Request $request) {
        $item = ClosingStatement::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(ClosingStatement::findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = ClosingStatement::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        ClosingStatement::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}