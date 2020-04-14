<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\DetailService;
use App\Model\Service;
use App\Model\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public $dirView = 'admin.service.';

    public function index(){

        $services = Service::all();
        $detailSv = DetailService::all();
        $subSv = Subservice::all();
        return view($this->dirView . 'list',compact('services'))->with('detail', $detailSv)->with('sub', $subSv);

    }
    public function create(){
        return view($this->dirView . 'add');
    }
    public function store(Request $request){
        //validate
        $sv = new Service();
        $sv->sv_name = $request->serviceName;
        $sv->description = $request->description;
        $sv->save();
        return redirect()->route('admin.services.create');
    }
}
