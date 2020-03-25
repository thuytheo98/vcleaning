<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\Service;
use Illuminate\Http\Request;

class DetailServiceController extends Controller
{
    public $dirView = 'admin.service.';
//    public function create(){
//        $sv = Service::all();
//        return view($this->dirView . 'add-detail',compact('sv'));
//    }
    public function create(){
        $sv = Service::all();
        return view($this->dirView . 'add',compact('sv'));
    }
    public function store(Request $request){
        //validate
        $request->validate([
            'aow' => 'required',
            'price' => 'numeric|required',
            'note' => 'nullable',
        ]);
        $detail = new Detail_service();
        $detail->amount_of_work = $request->aow;
        $detail->price = $request->price;
        $detail->note = $request->note;
        $detail->sv_id = $request->service;
        $detail->save();
        return redirect()->route('admin.subservice.create');
    }
}
