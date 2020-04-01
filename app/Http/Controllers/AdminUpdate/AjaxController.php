<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;
use App\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDetailService($idService){
        $detail = Detail_service::where('sv_id', $idService)->get();
        if($detail){
            foreach ($detail as $dl){
                echo "<option value='".$dl->id."'>".$dl->amount_of_work ."</option>";
            }
        }
    }
    public function showEditUser($id){
        $editUser = User::where('id', $id)->first();
        return response()->json($editUser);
    }
    public function updateUser(Request $request, $id){

    }
}
