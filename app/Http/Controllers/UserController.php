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
                'username' => 'manager11',
                'nama' => 'Manager 11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ],
        );

        $users->username = 'manager12';
        
        $users->save();
        
        $users->wasChanged(); //true
        $users->wasChanged('username'); //true
        $users->wasChanged(['username', 'level_id']); //true
        $users->wasChanged('nama'); //false
    
        dd($users->wasChanged(['nama', 'username'])); //true
    
        // return view('user.index', ['users' => $users]);
    }
}
