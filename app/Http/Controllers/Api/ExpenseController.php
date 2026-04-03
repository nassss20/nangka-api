<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() { return response()->json(Expense::all()); }
    
    public function store(Request $request) {
        $item = Expense::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(Expense::findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = Expense::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        Expense::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}