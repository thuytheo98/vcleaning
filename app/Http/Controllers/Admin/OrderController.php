<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\DetailService;
use App\Model\Order;
use App\User;

class OrderController extends Controller
{
    public $dirView = 'admin.order.';

    public function index(){
        $order = Order::all();
        return view($this->dirView . 'list')->with('list_order', $order);
    }
    public function show($id){
        $detailOrder = Order::find($id);
        $user = $detailOrder->user_id;
        $detailService = $detailOrder->detail_sv_id;
        $aow = DetailService::find($detailService);
        $userInfo = User::find($user);
        return view($this->dirView . 'detail_order',
            compact('userInfo'), compact('aow'))->with('detail', $detailOrder);
    }

    public function getOrderWithFilter($status){
        $orderFilter = Order::where('status', '=', $status)->get();
        if($status == 0){
            return view($this->dirView . 'order_filter', compact('status'))->with('orderStatus', $orderFilter);
        }elseif($status == 1){
            return view($this->dirView . 'order_filter',compact('status'))->with('orderStatus', $orderFilter);
        }elseif($status == 2){
            return view($this->dirView . 'order_filter',compact('status'))->with('orderStatus', $orderFilter);
        }elseif($status == 3) {
            return view($this->dirView . 'order_filter',compact('status'))->with('orderStatus', $orderFilter);
        }
    }
}
