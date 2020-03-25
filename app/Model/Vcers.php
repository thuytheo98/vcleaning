<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Vcers extends Model
{
    public $table = 'vcers';
    public $primaryKey = 'id';
    public $fillable = ['name', 'identification', 'address', 'phone', 'images', 'age', 'date', 'time', 'status'];
}
