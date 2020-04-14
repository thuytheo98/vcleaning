<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public $dirView = "admin.";

    public function index(){

        $emp = Auth::guard("employees")->user();
        $role = $emp->role;

        if($role == 1){
            $role = "admin";
        }else{
            $role = "employee";
        }

        return view($this->dirView . 'index',compact('role'))->with("data_user", $emp);

    }
}
