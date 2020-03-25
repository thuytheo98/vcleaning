<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Order;

class OrderController extends Controller
{
    public $dirView = 'admin.order.';
    public function index(){
        $order = Order::all();
        return view($this->dirView . 'list')->with('list_order', $order);
    }
}
