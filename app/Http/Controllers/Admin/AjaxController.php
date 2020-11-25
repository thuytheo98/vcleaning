<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\Model\DetailService;
use App\Model\Subservice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{

    public function getDetailInfo($id){
        $detail = DetailService::where('sv_id', $id)->get()->toArray();
        foreach($detail as $item){
            echo"
            <tr>
                <td>{$item['amount_of_work']}</td>
                <td>{$item['price']}</td>
                <td>{$item['note']}</td>
                <td><a href=\"#\">Edit</a></td>
            </tr>
            ";
        }
    }
    public function getSubInfo($id){

        $sub = Subservice::where('sv_id', $id)->get()->toArray();
        foreach($sub as $item){
            echo"
            <tr>
                <td>{$item['name']}</td>
                <td>{$item['price']}</td>
                <td>{$item['description']}</td>
                <td><a href=\"#\">Edit</a></td>
            </tr>
            ";
        }
    }

    public function showEditUser($id)
    {
        $editUser = User::where('id', $id)->first();
        return response()->json($editUser);
    }

    public function updateUser(Request $request, $id)
    {
        try {
            $updateUser = User::find($id);
            $updateUser->name = $request->name;
            $updateUser->email = $request->email;
            $updateUser->phone = $request->phone;
            $updateUser->save();
        } catch (\Exception $e){
            return response()->json([
                'status'  => false,
                'message' =>$e->getMessage()
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => 'Update successfully'
        ]);


    }

}
