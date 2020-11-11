<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showTemplate(){
        return view("template.base");
    }

    function showProduct(){
        return view("template.product");
    }

    function showPromo(){
        return view("template.promo");
    }

}