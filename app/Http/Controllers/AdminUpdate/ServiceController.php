<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $dirView = 'admin.service.';
    public function index(){
        $services = Service::all();
        return view($this->dirView . 'list',compact('services'));
    }
    public function store(Request $request){
        $sv = new Service();
        $sv->sv_name = $request->sv_name;
        $sv->description = $request->description;
        $sv->sub_id = 1; //ngu ng
        $sv->save();
        return redirect()->route('admin.services.index');
    }
}
