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

        if(Auth::guard('employees')->check()){
            return redirect()->route('admin.home.index');
        }

        if($request->isMethod('post')){

            $name = $request['name'];
            $password = $request['password'];

            $auth = Auth::guard('employees')->attempt([
                'emp_username'=> $name,
                'password'=> $password,
                'emp_role' => '1'
            ]);

            $authEmp = Auth::guard('employees')->attempt([
                'emp_username'=> $name,
                'password'=> $password,
                'emp_role' => '2'
            ]);

            if(!$auth){

                if($authEmp){
                    return redirect()->route('admin.home.index');
                }
                return back()->withInput()->withErrors("login fail");

            }

            return redirect()->route('admin.home.index');
        }

        return view($this->dirView . 'signin');
    }

    public function logout(){

        Auth::guard('employees')->logout();
        return redirect()->route('admin.login');
    }

}
