<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\DetailService;
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

        $detailSv = new DetailService();
        $detailSv->amount_of_work = $request->aow;
        $detailSv->price = $request->price;
        $detailSv->note = $request->note;
        $detailSv->sv_id = $request->serviceName;
        $detailSv->save();
        return redirect()->route('admin.services.index');
    }
}
