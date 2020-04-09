<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\Service;
use App\Model\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public $dirView = 'admin.service.';
    public function index(){
        $services = Service::all();
        $detailSv = Detail_service::all();
        $subSv = Subservice::all();
        return view($this->dirView . 'list',compact('services'))->with('detail', $detailSv)->with('sub', $subSv);
    }
    public function create(){
        return view($this->dirView . 'add');
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
