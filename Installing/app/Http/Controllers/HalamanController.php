<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view("halaman/index");
    }

    function about(){
        return view("halaman/about");
    }
    function contact(){
        $data =[
            "title" => "Halaman Contact",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, sapiente.",
            "profile" => [
                "alamat" => "Jl. Cempaka Besar No. 12, Jakarta",
                "telepon" => "021-12345678"
            ]
            ];
        return view("halaman/contact")->with ($data);
    }
}
