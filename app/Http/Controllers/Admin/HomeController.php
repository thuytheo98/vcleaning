<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Order;
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
        $orderNotHandling = Order::where('status' ,0)->get()->count();
        $orderHandling = Order::where('status' ,1)->get()->count();
        $orderFinish = Order::where('status' ,2)->get()->count();
        $orderCancel = Order::where('status' ,3)->get()->count();

        return view($this->dirView . 'index',compact('role'))
            ->with("data_user", $emp)
            ->with("newOrder", $orderNotHandling)
            ->with("handlingOrder", $orderHandling)
            ->with("finishOrder", $orderFinish)
            ->with("cancelOrder", $orderCancel);
    }
}
