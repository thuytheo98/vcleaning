<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $dirView = 'services.';

    public function index(){
        $services = Service::all();
        return view($this->dirView . 'list_sv')->with('listsv', $services);
    }
    public function store(Request $request){
        //validate
        $request->validate([
            'sv_name'=>'required|unique',
            'description' => 'nullable'
        ]);
        //save
        $sv = new Service();
        $sv->sv_name = $request->sv_name;
        $sv->desciption = $request->description;
        $sv->save();
        return redirect()->route('admin.services.index');
    }
    public function edit($id){

    }
    public function update(){

    }
    public function destroy(){

    }
}
