<?php


namespace App\Http\Controllers\AdminUpdate;


use App\Http\Controllers\Controller;
use App\Model\Detail_service;

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
}
