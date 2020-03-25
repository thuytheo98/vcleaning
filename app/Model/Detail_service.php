<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Detail_service extends Model
{
    public $table = 'detail_service';
    public $primaryKey = 'id';
    public $fillable = ['amount_of_work', 'price', 'note', 'sv_id'];
}
