<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class AJAXController extends Controller
{
    function getCities(Request $request){
        $view=View::make('ajax.cities');
        return $view;//->renderSections()['city'];
    }
}
