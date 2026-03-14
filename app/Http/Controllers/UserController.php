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
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_3',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // coba akses model UserModel
        $users = UserModel::where('level_id', 2)->count();
        //dd($users); //2.3 bagian 1
        return view('user.index', ['users' => $users]);
    }
}
