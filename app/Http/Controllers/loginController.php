<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function tampilHomeData(){
        
        $data =[
            'nim' => '232220',
            'nama' => 'Dayat'
        ];
        return view('tugas3_232220', $data);
    }
}
