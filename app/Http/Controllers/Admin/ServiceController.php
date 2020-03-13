<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Service;

class ServiceController extends Controller
{
    public $dirView = 'services.';

    public function index(){
        $services = Service::all();
        return view($this->dirView . 'list_sv')->with('listsv', $services);
    }
}
