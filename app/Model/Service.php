<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'service';
    public $primaryKey = 'sv_id';
    public $timestamps = true;
    public $fillable = ['sv_name', 'description', 'sub_id'];
}
