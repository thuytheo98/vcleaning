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
            $addvcer->vcer_name = $request->name;
            $addvcer->vcer_identification = $request->cmnd;
            $addvcer->vcer_phone = $request->phone;
            $addvcer->vcer_address = $request->address;
            //images

            if($request->hasFile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $imageName = md5(time())."_".$name;
                $path = public_path('/images/vcers');
                $file->move($path, $imageName);
                $addvcer->vcer_image = $imageName;
            }else{
                $addvcer->vcer_image = '';
            }

            $addvcer->vcer_age = $request->age;
            $addvcer->vcer_date = $request->date;
            $addvcer->vcer_time = $request->time;
            $addvcer->vcer_experience = $request->status;
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
        }else{
            $updateVcer->images = '';
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
