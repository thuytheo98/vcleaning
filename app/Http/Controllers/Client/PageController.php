<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public $dirView = 'pages.';

    public function showHomeCleaning(){

        return view($this->dirView . 'homecleaning');
    }

}
