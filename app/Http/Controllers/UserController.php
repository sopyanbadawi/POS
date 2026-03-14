<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        return view('user.profile', [
                'id' => $id,
                'name' => $name]);
    }

    public function index()
    {
        $users = UserModel::all();
        return view('user.index', ['users' => $users]);
    }

    public function tambah()
    {
        return view('user.tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id) {
        $users = UserModel::find($id);
        return view('user.ubah', ['users' => $users]);
    }

    public function ubah_simpan($id, Request $request) {
        $users = UserModel::find($id);
        
        $users->username = $request->username;
        $users->nama = $request->nama;
        $users->password = Hash::make('$request->password');
        $users->level_id = $request->level_id;
        $users->save();
        return redirect('/user');
    }

    public function hapus($id) {
        $users = UserModel::find($id);
        $users->delete();
        return redirect('/user');
    }
}
