<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class DetailService extends Model
{
    public $table = 'detail_service';
    public $primaryKey = 'detail_id';
    public $fillable = ['detail_amount', 'detail_price', 'detail_des', 'service_id'];
}
