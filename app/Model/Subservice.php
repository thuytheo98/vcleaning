<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    public $table = 'sub_service';
    public $primaryKey = 'sub_id';
    public  $fillable = ['sub_name', 'sub_des' , 'sub_price', 'service_id'];
}
