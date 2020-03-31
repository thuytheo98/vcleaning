<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\Service;
use App\Model\Subservice;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $dirView = 'admin.service.';
    public function index(){
        $users = DB::table('service')
            ->join('detail_service', 'service.id', '=', 'service.user_id')
            ->join('subservice', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();



        $services = Service::all();
        $detail_sv = Detail_service::all();
        $subsv = Subservice::all();
        return view($this->dirView . 'list',compact('services'))->with('detail', $detail_sv)->with('sub', $subsv);
    }
    public function create(){
        return view($this->dirView . 'add_new');
    }
    public function store(Request $request){
        //validate
//        $request->validate([
//            'sv_name' => 'required|max:100',
//            'description' => 'nullable',
//            'aow' => 'required',
//            'price' => 'numeric',
//            'note' => 'nullable',
//            'sub_name' => 'nullable',
//            'sub_price' =>'nullable|numeric',
//            'sub_description' => 'nullable'
//        ]);
        $sv = new Service();
        $newDetail = new Detail_service();
        $newSub = new Subservice();
        $sv->sv_name = $request->sv_name;
        $sv->description = $request->description;
        $sv->save();
        $sv_find_id = Service::where('sv_name', $request->sv_name)->get();
        dd($sv_find_id);
        $newDetail->amount_of_work = $request->aow;
        $newDetail->price = $request->price;
        $newDetail->note = $request->note;
        $newDetail->save();
        return redirect()->route('admin.services.create');
    }
}
