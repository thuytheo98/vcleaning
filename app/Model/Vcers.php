<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Vcers extends Model
{
    public $table = 'vcer';
    public $primaryKey = 'vcer_id';
    public $fillable = ['vcer_name', 'vcer_identification', 'vcer_address', 'vcer_phone', 'vcer_age', 'vcer_image', 'vcer_date', 'vcer_time', 'vcer_experience'];
}
