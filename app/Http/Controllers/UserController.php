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
        $users = UserModel::findOr( 20, ['username', 'nama'], function (){
            abort(404);
        });
        return view('user.index', ['users' => $users]);
    }
}
