<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'order';
    public $primaryKey = 'id';
    public $fillable = ['address', 'payment', 'date', 'start_time', 'end_time', 'repeat', 'total', 'status', 'user_id', 'emp_id', 'sv_id', 'vcer_id'];
}
