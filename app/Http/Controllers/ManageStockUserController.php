<?php

namespace App\Http\Controllers;

class ManageStockUserController extends Controller
{

    public function index()
    { 

        return view('manage-stockuser.manage-stockuser');
    }
    public function Detail()
    { 

        return view('manage-stockuser-detail.manage-stockuser-Detail');
    }
}
?>