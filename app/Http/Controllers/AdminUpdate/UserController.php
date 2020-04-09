<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{

    public $dirView = "admin.user.";

    public function index(){
        $users = User::all();
        return view($this->dirView . 'list')->with("list_user", $users);
    }
    public function edit($id){
        $editUser = User::find($id);
        return view($this->dirView . 'edit', compact('editUser'));
    }
    public function showEditUser($id){
        $editUser = \App\User::where('id', $id)->first();
        return response()->json($editUser);
    }

}
