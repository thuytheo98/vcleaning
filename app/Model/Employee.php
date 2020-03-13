<?php


namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
    public $table = "employee";
    public $primaryKey = "id";
    public $timestamps = true;
    public $fillable = ['name', 'address', 'identification','phone','gender', 'birthday', 'email', 'username', 'password','role' ];
}
