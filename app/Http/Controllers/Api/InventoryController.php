<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'List Data Inventaris',
            'data'    => Inventory::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'inventaris_id' => 'required|string|max:255',
            'barang'        => 'required|string|max:255',
            'type'          => 'required|string|max:255',
            'serial_number' => 'required|string|max:255',
            'spesifikasi'   => 'required|string|max:255',
            'status'        => 'required|string|max:255',
            'assign'        => 'required|string|max:255',
            'department'    => 'required|string|max:255',
        ]);

        $inventory = Inventory::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Inventaris Berhasil Disimpan',
            'data'    => $inventory
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json(['success' => false, 'message' => 'Inventaris tidak ditemukan'], 404);
        }

        $request->validate([
            'inventaris_id' => 'required|string|max:255',
            'barang'        => 'required|string|max:255',
            'type'          => 'required|string|max:255',
            'serial_number' => 'required|string|max:255',
            'spesifikasi'   => 'required|string|max:255',
            'status'        => 'required|string|max:255',
            'assign'        => 'required|string|max:255',
            'department'    => 'required|string|max:255',
        ]);

        $inventory->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Inventaris Berhasil Diubah',
            'data'    => $inventory
        ], 200);
    }

    public function destroy($id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json(['success' => false, 'message' => 'Inventaris tidak ditemukan'], 404);
        }

        $inventory->delete();

        return response()->json([
            'success' => true,
            'message' => 'Inventaris Berhasil Dihapus'
        ], 200);
    }
    public function analytics()
    {
        return response()->json([
            'success' => true,
            'data' => [
                'baik'         => Inventory::where('status', 'Baik')->count(),
                'rusak'        => Inventory::where('status', 'Rusak')->count(),
                'dilelang'     => Inventory::where('status', 'Dilelang')->count(),
                'tidak_dipakai'=> Inventory::where('status', 'Tidak Dipakai')->count(),
            ]
        ], 200);
    }
}