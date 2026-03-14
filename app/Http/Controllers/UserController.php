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
        $users = UserModel::firstOrNew(
[
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $users->save();
        return view('user.index', ['users' => $users]);
    }
}
