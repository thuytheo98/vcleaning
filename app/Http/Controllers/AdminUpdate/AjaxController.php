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
    public function getDetailService($idService){
        $detail = Detail_service::where('sv_id', $idService)->get();
        if($detail){
            foreach ($detail as $dl){
                echo "<option value='".$dl->id."'>".$dl->amount_of_work ."</option>";
            }
        }
    }

    public function getDetailInfo($id){

        $ds = DB::table('detail_service')->join('subservice', 'detail_service.sv_id', '=', 'subservice.sv_id')->where('detail_service.sv_id', $id)->get();
//        $detailInfo = DetailService::where('sv_id', $id)->get();
//        $subInfo = Subservice::where('sv_id', $id)->get();
        return response()->json($ds);

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
