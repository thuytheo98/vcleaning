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
        $validated = $request ->validated();
        $addvcer = new Vcers();
        $addvcer->name = $validated->name;
        $addvcer->identification = $validated->identification;
        $addvcer->phone = $validated->phone;
        $addvcer->address = $validated->address;
        $addvcer->age = $validated->age;
        $addvcer->date = $validated->date;
        $addvcer->time = $validated->time;
        $addvcer->status = $validated->status;
        $addvcer->save();
        return redirect()->route('admin.vcers.index');
    }
    public function edit($id){
        $editVcer = Vcers::find($id);
        return view($this-> dirView . 'edit',compact('editVcer'));
    }
    public function update(VcerRequest $request){

    }
    public function destroy($id){
        $deleteVcer = Vcers::find($id);
        $deleteVcer->delete();
        return redirect()->route('admin.vcers.index');
    }

}
