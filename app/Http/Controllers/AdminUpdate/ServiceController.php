<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $dirView = 'admin.service.';
    public function index(){
        $services = Service::all();
        return view($this->dirView . 'list',compact('services'));
    }
    public function create(){
        return view($this->dirView . 'add');
    }
    public function store(Request $request){
        //validate
        $sv = new Service();
        $newDetail = new Detail_service();
        $sv->sv_name = $request->sv_name;
        $sv->description = $request->description;
        $sv->save();
//        $newDetail->amount_of_work = $request->aow;
//        $newDetail->price = $request->price;
//        $newDetail->note = $request->note;
//        $newDetail->sv_id = $sv->id;
//        $newDetail->save();
        return redirect()->route('admin.detail.create');
    }
}
