<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        $a=5;
        $b=11;
        $c=$a+$b;

        return "El valor de la suma es $c";
    }    
}
