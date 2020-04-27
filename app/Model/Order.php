<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'order';
    public $primaryKey = 'order_id';
    public $fillable = ['order_address', 'order_payment', 'order_date', 'order_start_time', 'order_end_time', 'order_repeat', 'order_total', 'order_status', 'user_id', 'service_id', 'emp_id', 'vcer_id'];
}
