<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Vcers extends Model
{
    public $table = 'vcer';
    public $primaryKey = 'id';
    public $fillable = ['name', 'identification', 'address', 'phone', 'age', 'date', 'time', 'status'];
}
