<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $dirView = 'auth.';
    public function login(Request $request){
//        App::setLocale('en');
        if(Auth::check()){
            return redirect()->route('index');
        }
        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|max:50',
                'password' => 'required|max:64'
            ]);
            $dataLogin = [
                'email' => $request['email'],
                'password' => $request['password']
            ];
            $auth = Auth::attempt($dataLogin, false);
            if (!$auth){
                return back()->withInput()->withErrors("login fail");
            }
            return redirect()->route('index');
        }
        return view($this->dirView . 'login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
