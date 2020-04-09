<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\Service;
use App\Model\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubServiceController extends Controller
{
    public $dirView = 'admin.service.';
    public function create(){
        $sv = Service::all();
        $detail_sv = Detail_service::all();
        return view($this->dirView . 'add_sub')->with('service', $sv)->with('detailsv', $detail_sv);
    }
    public function store(Request $request){
        //validate
        $newSub = new Subservice();
        $newSub->name = $request->sub_name;
        $newSub->price = $request->price;
        $newSub->description = $request->description;
        $newSub->sv_id = $request->service;
        $newSub->detail_sv_id = $request->detail_service;
        $newSub->save();
        return redirect()->route("admin.services.index");
    }
}
