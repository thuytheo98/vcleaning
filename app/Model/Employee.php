<?php


namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
    public $table = "employee";
    public $primaryKey = "emp_id";
    public $fillable = ['emp_name', 'emp_phone', 'emp_address','emp_identification', 'emp_gender', 'emp_birthday', 'emp_email', 'emp_image', 'emp_username', 'emp_password', 'emp_role'];

}
