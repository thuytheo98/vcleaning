<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Service;
use App\Model\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubServiceController extends Controller
{
    public $dirView = 'admin.service.';

    public function create(){

        $sv = Service::all();
        return view($this->dirView . 'add_sub')->with('service', $sv);
    }

    public function store(Request $request){

        //validate
        $newSub = new Subservice();
        $newSub->name = $request->subName;
        $newSub->price = $request->priceSub;
        $newSub->description = $request->descriptionSub;
        $newSub->sv_id = $request->serviceName;
        $newSub->save();
        return redirect()->route("admin.services.index");

    }
    public function getDetailInfo($id){

        $subInfo = Subservice::find($id);
        return response()->json($subInfo);

    }

}
