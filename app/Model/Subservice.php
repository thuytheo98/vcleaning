<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    public $table = 'subservice';
    public $primaryKey = 'id';
    public  $fillable = ['name', 'description' , 'price', 'sv_id', 'detail_sv_id'];
}
