<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public $dirView = "admin.employee.";

    public function index(){

        $emps = Employee::all();
        return view($this->dirView . 'list')->with("list_emp", $emps);
    }

    public function create(){

        return view($this->dirView . 'add_emp');
    }

    public function store(Request $request){

        $newEmp = new Employee();
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|numeric',
            'address' => 'required',
            'cmnd' => 'required|numeric',
            'gender' => 'required',
            'birth' => 'required|date|max:100',
            'email' => 'required|email:rfc,dns',
            "username" => 'required|max:100',
            'password' => 'required',
        ]);
        $newEmp ->name = $request->name;
        $newEmp ->phone = $request->phone;
        $newEmp ->address = $request->address;
        $newEmp ->gender = $request->gender;
        $newEmp ->identification = $request->cmnd;
        $newEmp ->birthday = $request->birth;
        $newEmp ->email = $request->email;
        $newEmp ->username = $request->username;
        $newEmp ->password = Hash::make($request->password) ;

//        if($request->password == $request->re_password){
//            $newEmp ->password = Hash::make($request->password);
//        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $imageName = md5(time())."_".$name;
            $path = public_path('/images/vcers');
            $file->move($path, $imageName);
            $newEmp->image = $imageName;
        }else{
            $newEmp->image = '';
        }
        $newEmp ->role = $request->role;
        $newEmp->save();
        return redirect()->route("admin.employees.index");
    }

    public function edit($id){

        $arrEmp = Employee::find($id);
        return view($this->dirView . 'edit_emp')->with("edit", $arrEmp);
    }

    public function update(Request $request,$id){

        $editEmp = Employee::find($id);
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|numeric',
            'address' => 'required',
            'cmnd' => 'required|numeric',
            'gender' => 'required',
            'birth' => 'required|date|max:100',
            'email' => 'required|email:rfc,dns',
            "username" => 'required|max:100',
            'password' => 'required',
        ]);
        $editEmp ->name = $request->name;
        $editEmp ->phone = $request->phone;
        $editEmp ->address = $request->address;
        $editEmp ->gender = $request->gender;
        $editEmp ->identification = $request->cmnd;
        $editEmp ->birthday = $request->birth;
        $editEmp ->email = $request->email;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalExtension();
            $imageName = md5(time())."_".$name;
            $path = public_path('/images/vcers');
            $file->move($path, $imageName);
            $editEmp->image = $imageName;
        }else{
            $editEmp->image = '';
        }
        $editEmp ->username = $request->username;
        $editEmp ->password = Hash::make( $request->password);
        $editEmp ->role = $request->role;
        $editEmp->save();
        return redirect()->route("admin.employees.index");
    }

    public function destroy($id){

        $deleteEmp = Employee::find($id);
        $deleteEmp->delete();
        return redirect()->route('admin.employees.index');
    }
}
