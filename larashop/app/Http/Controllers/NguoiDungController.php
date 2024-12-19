<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NguoiDungController extends Controller
{
    // Retrieve and display the list of users
    public function getDanhSach()
    {
        $nguoidung = NguoiDung::all();
        return view('admin.nguoidung.danhsach', compact('nguoidung'));
    }

    // Show the form to add a new user
    public function getThem()
    {
        return view('admin.nguoidung.them');
    }

    // Handle the form submission for adding a new user
    public function postThem(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung'],
            'role' => ['required'],
            'password' => ['required', 'min:4', 'confirmed'],
        ]);

        // Create a new user instance and save it to the database
        $user = new NguoiDung();
        $user->name = $request->name;
        $user->username = Str::before($request->email, '@');
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        // Redirect to the user list after successfully adding
        return redirect()->route('nguoidung');
    }

    // Show the form to edit an existing user
    public function getSua($id)
    {
        $nguoidung = NguoiDung::find($id);
        return view('admin.nguoidung.sua', compact('nguoidung'));
    }

    // Handle the form submission for updating an existing user
    public function postSua(Request $request, $id)
    {
        // Validate the request inputs
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email,' . $id],
            'role' => ['required'],
            'password' => ['confirmed'],
        ]);

        // Find the existing user and update its details
        $user = NguoiDung::find($id);
        $user->name = $request->name;
        $user->username = Str::before($request->email, '@');
        $user->email = $request->email;
        $user->role = $request->role;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        // Redirect to the user list after successfully updating
        return redirect()->route('admin.nguoidung');
    }

    // Handle the user deletion
    public function getXoa($id)
    {
        $user = NguoiDung::find($id);
        $user->delete();

        // Redirect to the user list after successfully deleting
        return redirect()->route('admin.nguoidung');
    }
}
