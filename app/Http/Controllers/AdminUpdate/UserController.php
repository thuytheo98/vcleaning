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
    public function create(){
    }
    public function show($id){

    }

    public function edit($id){

    }

    public function store(Request $request){

    }
    public function destroy($id){

    }
}
