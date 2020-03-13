<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public $dirView = 'users.';

    public function index(){
        $users = User::all();
        return view($this->dirView .'index');
    }

    public function create(UserRequest $request){

    }

    public  function show($id){
        return "yassssss".$id;
    }
}
