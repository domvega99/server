<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        
        $users = User::all();
        return response()->json($users);

    }

    public function store(Request $request){

        $users = User::create($request->all());
        return response()->json($users);

    }

    public function destroy($id){
        $users = User::find($id);
        if ($users) {
            $users->delete();
        }else {
            return response()->json([
                'status' => 404,
                'message' => 'Not found'
            ], 404);
        }
    }
}
