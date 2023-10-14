<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index($name, $price, $status)
    {
                // return "service name : " . $name . "the price:". $price;
                $data['name']= $name;
                $data['price']= $price;
                $data['status']= $status;
        
            return view('my_services', $data);
    }

    public function getname($name)
    {
                return "service name : " . $name;
                
    }

    public function openform()
    {
                return view('form');
                
    }
    public function submitform(Request $request)
    {
        $request -> validate([
            "email" => "required",
            "password" => "required",
            "name" => "required |Max:4"
        ]);
        
            return $request -> name;
                
    }

    public function updatefile(Request $request)
    {
        // return sss;
        $path = $request->file('logo')->store('public/logos');

        $data['image'] = $path;
        return view('show-file',$data);
        // return $path;
    }
}

