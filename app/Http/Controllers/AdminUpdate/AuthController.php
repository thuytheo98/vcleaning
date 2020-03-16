<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Model\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public  $dirView = 'admin.auth.';
    public function login(Request $request){

        if($request->isMethod('post')){

            $name = $request['name'];
            $password = $request['password'];
            $auth = Auth::guard('employees')->attempt(['username'=>$name, 'password'=>$password, 'role' => '2']);
            if($auth){
                return redirect()->route('admin.index');
            }
            return back()->withErrors('login fail')->withInput();
        }
        return view($this->dirView . 'signin');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
