<?php

namespace App\Http\Controllers;

use App\User; //se manda a llamar el modelo de la base de datos
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::latest()->get();  
        
        return view('users.index',[
            'users' => $user
        ]);
    }

    public function store(Request $request){

        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => $request ->password,
        ]);

        return back();
    }

    public function destroy(User $user){
        $user->delete();
        
        return back();
    }
}
