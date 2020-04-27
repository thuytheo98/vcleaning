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
        return view($this->dirView . 'list_emp')->with("list_emp", $emps);
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
            'images' => 'images|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "username" => 'required|max:100',
            'password' => 'required',
        ]);
        $newEmp ->emp_name = $request->name;
        $newEmp ->emp_phone = $request->phone;
        $newEmp ->emp_address = $request->address;
        $newEmp ->emp_gender = $request->gender;
        $newEmp ->emp_identification = $request->cmnd;
        $newEmp ->emp_birthday = $request->birth;
        $newEmp ->emp_email = $request->email;
        $newEmp ->emp_username = $request->username;

        if($request->password == $request->re_password){
            $newEmp ->emp_password = Hash::make($request->password);
        }

        $newEmp ->emp_role = $request->role;
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
            'images' => 'images|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "username" => 'required|max:100',
            'password' => 'required',
        ]);
        $editEmp ->emp_name = $request->name;
        $editEmp ->emp_phone = $request->phone;
        $editEmp ->emp_address = $request->address;
        $editEmp ->emp_gender = $request->gender;
        $editEmp ->emp_identification = $request->cmnd;
        $editEmp ->emp_birthday = $request->birth;
        $editEmp ->emp_email = $request->email;
        $editEmp ->emp_username = $request->username;
        $editEmp ->emp_password = $request->password;
        $editEmp ->emp_role = $request->role;
        $editEmp->save();
        return redirect()->route("admin.employees.index");
    }

    public function destroy($id){

        $deleteEmp = Employee::find($id);
        $deleteEmp->delete();
        return redirect()->route('admin.employees.index');
    }
}
