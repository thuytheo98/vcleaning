<?php


namespace App\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    public $table = 'users';
    public $primaryKey = 'id';
    public $fillable = ['name', 'password', 'email', 'remember_token'];
    public $timestamps = true;
}
