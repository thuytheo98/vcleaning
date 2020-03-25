<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Http\Requests\VcerRequest;
use App\Model\Vcers;
use Illuminate\Http\Request;

class VcerController extends Controller
{
    public $dirView = 'admin.vcers.';

    public  function index(){
        $vcers = Vcers::all();
        return view($this->dirView . 'list')->with('listVcer' , $vcers);
    }
    public function create(){
        return view($this->dirView . 'add');
    }
    public function store(VcerRequest $request){
            $addvcer = new Vcers();
            $addvcer->name = $request->name;
            $addvcer->identification = $request->cmnd;
            $addvcer->phone = $request->phone;
            $addvcer->address = $request->address;
            //images
            if($request->hasFile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $imageName = time()."_".$name;
                $path = public_path('/images/vcers');
                $file->move($path, $imageName);
                $addvcer->images = $imageName;
            }else{
                $addvcer->images = '';
            }
            $addvcer->age = $request->age;
            $addvcer->date = $request->date;
            $addvcer->time = $request->time;
            $addvcer->status = $request->status;
            $addvcer->save();
            return redirect()->route('admin.vcers.index')->with('success', 'Save image successful');
    }
    public function edit($id){
        $editVcer = Vcers::find($id);
        return view($this-> dirView . 'edit',compact('editVcer'));
    }
    public function update(VcerRequest $request, $id){
        $updateVcer = Vcers::find($id);
        $updateVcer->name = $request->name;
        $updateVcer->identification = $request->cmnd;
        $updateVcer->phone = $request->phone;
        $updateVcer->address = $request->address;
        //images
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalExtension();
            $imageName = md5(time())."_".$name;
            $path = public_path('/images/vcers');
            $file->move($path, $imageName);
            $updateVcer->images = $imageName;
        }
        $updateVcer->age = $request->age;
        $updateVcer->date = $request->date;
        $updateVcer->time = $request->time;
        $updateVcer->status = $request->status;
        $updateVcer->save();
        return redirect()->route('admin.vcers.index')->with('update', 'Update successful');
    }
    public function destroy($id){
        $deleteVcer = Vcers::find($id);
        $deleteVcer->delete();
        return redirect()->route('admin.vcers.index');
    }

}
