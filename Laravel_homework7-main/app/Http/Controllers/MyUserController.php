<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser;

class MyUserController extends Controller
{
    
    public function index() {
        return MyUser::all();
    }

    public function get($id) {
        $user = MyUser::where('id', $id)->first();
        return $user;
    }

    public function store(Request $request) {

        $request->validate([
            'name'=>'required|max:50',
            'surname'=>'required|max:50',
            'email'=>'required|regex:/^.+@.+$/i'
        ]);
        return MyUser::create($request->all());
    }
    
}
