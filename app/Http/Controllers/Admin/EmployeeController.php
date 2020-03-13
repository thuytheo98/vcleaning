<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Employee;
use http\Env\Request;

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
    public function show($id){

    }

    public function edit($id){
        $arr_emp = Employee::find($id);
        return view($this->dirView . 'edit_emp')->with("edit", $arr_emp);
    }

    public function store(Request $request){
        $validate = $request->validate(
            'name'
        );
        $id = $request->emp_id;
        $up_emp = Employee::find($id);
        $up_emp->name = $request->name;
        $up_emp->phone = $request->phone;
        $up_emp->age = $request->age;
        $up_emp->address = $request->address;
        $up_emp->identification = $request->identification;
        $up_emp->save();
        redirect(view($this->dirView . 'list_emp'));
    }
    public function destroy($id){

    }
}
