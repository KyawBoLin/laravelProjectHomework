<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function homePage(){
        return view('webProject.index');
    }

    function categoryPage(){
        return view('webProject.category');
    }

    function foodMenuPage(){
        return view('webProject.foodMenu');
    }
}
