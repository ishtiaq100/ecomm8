<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index()
    {
        return "product page";
    }

    public function demo(){
        return "test";
    }
}
