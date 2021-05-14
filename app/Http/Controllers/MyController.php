<?php


namespace App\Http\Controllers;


class MyController extends Controller{
    public function changePage($page){
        return view($page);
    }
}
