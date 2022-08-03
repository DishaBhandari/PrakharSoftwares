<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addService(){
        // $data = menuBar::get();
        return view('admin.addService');
    }

    public function postAddService(Request $req){

    }

}