<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index() { 
        // Loads employee details with the salary record
        return response()->json(Salary::with('employee')->get()); 
    }
    
    public function store(Request $request) {
        $item = Salary::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(Salary::with('employee')->findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = Salary::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        Salary::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}