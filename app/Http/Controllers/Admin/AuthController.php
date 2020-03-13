<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $dirView = 'auth.';

    public function login(Request $request){

        if(Auth::check()){
            return redirect()->route('usr.users.index');
        }
        if($request->isMethod('post')){
            $validate = $request->validate([
                'name' => 'required|max:50',
                'password' => 'required|max:64'
            ]);
            $dataLogin = [
                'name' => $validate['name'],
                'password' => $validate['password']
            ];
            $auth = Auth::attempt($dataLogin, false);
            if (!$auth) {
                return back()->withInput()->withErrors("login fail");
            }
            return redirect()->route('usr.users.index');
        }
        return view($this->dirView . 'login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
