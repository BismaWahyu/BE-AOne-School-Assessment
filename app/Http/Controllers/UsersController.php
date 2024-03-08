<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users);
    }

    public function show($id){
        $user = User::find($id);

        if(!empty($user)){
            return response()->json($user);
        }else{
            return response()->json([
                "msg" => "User not found!"
            ], 400);
        }
    }
    
}
