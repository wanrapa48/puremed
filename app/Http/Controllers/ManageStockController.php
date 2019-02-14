<?php

namespace App\Http\Controllers;

class ManageStockController extends Controller
{

    public function index()
    { 

        return view('manage-stock.manage-stock');
    }
    public function Detaildata()
    { 

        return view('manage-stock-detail.manage-stock-Detail');
    }
}
?>