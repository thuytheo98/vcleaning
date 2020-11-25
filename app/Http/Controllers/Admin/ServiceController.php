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
    public function list(){
        dd('im here');
        $services = Service::all();
        return view($this->dirView . 'list_sv',compact('services'));

    }
    public function create(){

        return view($this->dirView . 'add');
    }

    public function store(Request $request){
        //validate
        $sv = new Service();
        $sv->sv_name = $request->serviceName;
        $sv->new = $request->new;
        $sv->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $imageName = md5(time())."_".$name;
            $path = public_path('/adminImage/service');
            $file->move($path, $imageName);
            $sv->image = $imageName;
        }else{
            $sv->image = '';
        }
        $sv->save();
        return redirect()->route('admin.services.detail.create');
    }
    function getCategory(){
        $servicelist = Service::all();
        return view($this->dirView . 'list_sv',compact('servicelist'));
    }
    function editCategory($id){
        $editCatS = Service::find($id);
        return view($this->dirView . 'edit_category')->with('editCatS', $editCatS);
    }
    function updateCategory(Request $request, $id){
        $sv = Service::find($id);
        $sv->sv_name = $request->serviceName;
        $sv->new = $request->new;
        $sv->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $imageName = md5(time())."_".$name;
            $path = public_path('/adminImage/service');
            $file->move($path, $imageName);
            $sv->image = $imageName;
        }else{
            $sv->image = '';
        }
        $sv->save();
        return redirect()->route('admin.service.list');
    }
}
