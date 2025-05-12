<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function index()
    {
        $users = UserData::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:user_data,email',
            'nomor_hp' => 'required|digits_between:9,13',
            'role' => 'required|in:Supervisor,Manager,Karyawan',
            'status' => 'required|boolean',
        ]);

        UserData::create($validated);
        return redirect()->route('users.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = UserData::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = UserData::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:user_data,email,' . $user->id,
            'nomor_hp' => 'required|digits_between:9,13',
            'role' => 'required|in:Supervisor,Manager,Karyawan',
            'status' => 'required|boolean',
        ]);

        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $user = UserData::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Data berhasil dihapus.');
    }
}
