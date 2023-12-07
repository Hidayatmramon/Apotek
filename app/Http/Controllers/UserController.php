<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|in:admin,user,kasir',
            'username' => 'required|string',
            'namadok' => 'nullable|string',
            'ruang' => 'nullable|string',
            'hari' => 'nullable|string',
            'password' => 'required|string',
        ]);

        User::create([
            'role' => $request->role,
            'username' => $request->username,
            'namadok' => $request->namadok,
            'ruang' => $request->ruang,
            'hari' => $request->hari,
            'password' => $request->password,
        ]);

        return redirect()->route('user.index')->with('succes', 'berhasil Menambahkan User');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'role' => 'required|in:admin,user,kasir',
            'username' => 'required|string',
            'namadok' => 'nullable|string',
            'ruang' => 'nullable|string',
            'hari' => 'nullable|string',
            'password' => 'required|string',
        ]);

        User::where('id', $id)->update([
            'role' => $request->role,
            'username' => $request->username,
            'namadok' => $request->namadok,
            'ruang' => $request->ruang,
            'hari' => $request->hari,
            'password' => $request->password,
        ]);

        return redirect()->route('user.index')->with('succes', 'berhasil Mengubah User');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'berhasil menghapus data!');
    }
}
