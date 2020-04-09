<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\Service;
use Illuminate\Http\Request;

class DetailServiceController extends Controller
{
    public $dirView = 'admin.service.';
    public function create(){
        $sv = Service::all();
        return view($this->dirView . 'add-detail',compact('sv'));
    }
    public function store(Request $request){
        //validate
        $request->validate([
            'aow' => 'required',
            'price' => 'numeric|required',
            'note' => 'nullable',
        ]);

        $detailSv = new Detail_service();
        $detailSv->amount_of_work = $request->aow;
        $detailSv->price = $request->price;
        $detailSv->note = $request->note;
        $detailSv->sv_id = $request->service;
        $detailSv->save();
        return redirect()->route('admin.subservice.create');
    }
}
