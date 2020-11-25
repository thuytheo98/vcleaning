<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\DetailService;
use App\Model\Order;
use App\Model\Service;
use App\Model\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $dirView = 'page.';

    public function getServiceBest(){
        $serviceBest = Service::all()->take(3);
        return view($this->dirView . 'index')->with('bestSV', $serviceBest);
    }

    public function getService(){
        $services = Service::all();
        return view($this->dirView . 'services')->with('listsv', $services);
    }
    function getServiceDetail($id){
        $detail = DetailService::where('sv_id', $id)->get();
        $sv = Service::where('sv_id', $id)->get('sv_name')->toArray();
        $svName = $sv[0];
        $name = $svName['sv_name'];
        return view($this->dirView . 'detail', compact('id'), compact('name'))->with('detail', $detail);
    }
    // Lay tong tien cua dich vu voi detail id
    function getTotalDetail($id){
        $detail_total = DetailService::where('id', $id)->get()->first();
        return response()->json($detail_total);
    }

    //xu lý đơn đặt
    function orderService(Request $request){
        $dataUser = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
        $user = User::create($dataUser);
        $user_id = $user->id;
        $soNha = $request->homeNumber;
        $address = $soNha.' '. $request->address;
        $dataOrder = [
            'address' => $address,
            'date' => $request->date,
            'start_time' => $request->time,
            'note' => $request->note,
            'detail_sv_id' => $request->amount_of_work,
            'status' => 0,
            'total' => $request->total,
            'user_id' => $user_id,
        ];
        $order = Order::create($dataOrder);
        return response()->json([
            'success'=>true,
            'message'=> 'success',
            'url'=> route('blog'),
        ]);
    }

}
