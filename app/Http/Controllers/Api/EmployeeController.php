<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() { return response()->json(Employee::all()); }
    
    public function store(Request $request) {
        $item = Employee::create($request->all());
        return response()->json($item, 201);
    }
    
    public function show($id) { return response()->json(Employee::findOrFail($id)); }
    
    public function update(Request $request, $id) {
        $item = Employee::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }
    
    public function destroy($id) {
        Employee::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}