<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // 1. Send all data to the Flutter Summary Page
    public function index()
    {
        // Fetches all records and sorts them by date (newest first)
        $inventories = Inventory::orderBy('date', 'desc')->get();
        return response()->json($inventories);
    }

    // 2. Receive new data from the Flutter Entry Page
    public function store(Request $request)
    {
        // First, validate that the phone sent the correct type of data
        $validated = $request->validate([
            'date' => 'required|date',
            'kg' => 'required|numeric',
            'total_packs' => 'required|integer',
            'display_packs' => 'required|integer',
            'rejected_amount' => 'required|integer',
            'rejected_unit' => 'required|string',
            'balance_packs' => 'required|integer',
            'purchase_rm' => 'required|numeric',
            'sales_rm' => 'required|numeric',
        ]);

        // If validation passes, save it to the database
        $inventory = Inventory::create($validated);

        // Tell the phone it was successful
        return response()->json([
            'message' => 'Entry saved successfully!',
            'data' => $inventory
        ], 201);
    }

    // 3. Update an existing entry
    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->update($request->all());

        return response()->json([
            'message' => 'Entry updated successfully!',
            'data' => $inventory
        ]);
    }

    // 4. Delete an entry
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return response()->json([
            'message' => 'Entry deleted successfully!'
        ]);
    }
}