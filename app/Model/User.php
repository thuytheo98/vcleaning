<?php


namespace App\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    public $table = 'user';
    public $primaryKey = 'user_id';
    public $fillable = ['user_name', 'user_password', 'user_email', 'remember_token'];
    public $timestamps = true;
}
