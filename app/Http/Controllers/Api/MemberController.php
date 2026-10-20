<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'List Data Members',
            'data'    => Member::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required|string|max:255',
            'jabatan'    => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $member = Member::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Member Berhasil Disimpan',
            'data'    => $member
        ], 201);
    }

    public function show($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json(['success' => false, 'message' => 'Member tidak ditemukan'], 404);
        }

        return response()->json(['success' => true, 'data' => $member], 200);
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json(['success' => false, 'message' => 'Member tidak ditemukan'], 404);
        }

        $request->validate([
            'nama'       => 'required|string|max:255',
            'jabatan'    => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $member->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Member Berhasil Diubah',
            'data'    => $member
        ], 200);
    }

    public function destroy($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json(['success' => false, 'message' => 'Member tidak ditemukan'], 404);
        }

        $member->delete();

        return response()->json([
            'success' => true,
            'message' => 'Member Berhasil Dihapus'
        ], 200);
    }
}