<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebCTL extends Controller
{
    public function abuotUs(){
        return view("abuot-us");
    }

    public function listCTGR(){
        return view("list-category");
    }

    public function listPD(){
        return view("list-product");
    }

    public function addCTGR(){
        return view("add-category");
    }

    public function editCTGR(){
        return view("edit-category");
    }

    public function editPD(){
        return view("edit-product");
    }
}
