<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function personal(){
         return view('username');
    }

    public function personalworld(){
        return view('world');
   }

   public function personalinfo($name){
    return view('question',['name'=> $name]);
}



public function personaldata($id)
{
    $students = [
        1 => [
            'id' => 1,
            'name' => 'ALI HYDER',
            'email' => 'ali@gmail.com',
            'contact' => '123456',
        ],
        2 => [
            'id' => 2,
            'name' => 'OSAMA HYDER',
            'email' => 'osama@gmail.com',
            'contact' => '987-654-3210',
        ],
        3 => [
            'id' => 3,
            'name' => 'MARYAM ABBASI',
            'email' => 'maryam@gmail.com',
            'contact' => '987-654-3210',
        ],
    ];
    if (!isset($students[$id])) {
        return response('Student not found', 404);
    }

    return view('data2', ['student' => $students[$id]]);
}
}


 
