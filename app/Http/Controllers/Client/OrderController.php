<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Order;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public $dirView = 'page.';

     public function loginCustom(Request $request){
        $request->validate([
            'emailUser' => 'required|max:50',
            'phoneUser' => 'required|max:15'
        ]);
        $hasUser = User::where('email', $request->emailUser)->where('phone', $request->phoneUser)->get()->toArray();
        $orderID = $hasUser[0];
        $id = $orderID['id'];
        $order = Order::where('user_id', $id)->get();
        return view($this->dirView . 'history-order')->with('order', $order);
     }
}
