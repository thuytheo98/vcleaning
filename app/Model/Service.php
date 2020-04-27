<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'service';
    public $primaryKey = 'service_id';
    public $fillable = ['service_name', 'service_image', 'service_des', 'service_new'];
}
