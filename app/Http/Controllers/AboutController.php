<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $profiles = [
            [
                'name' => 'ILHAM SIDDIK',
                'nim'  => '2301010061',
                'bio'  => 'Mengerjakan bagian About',
                'img'  => 'images/ham.jpeg'
            ],
            [
                'name' => 'SURYA NINGRAT',
                'nim'  => '2301010028',
                'bio'  => 'Mengerjakan bagian Home',
                'img'  => 'images/jo.jpg'
            ],
        ];

        return view('about', compact('profiles'));

    }
}
