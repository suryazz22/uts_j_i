<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $profiles = [
            [
                'name' => 'AHMAD IMRAN',
                'nim'  => '2301010002',
                'bio'  => 'Mengerjakan bagian Home',
                'img'  => 'images/imran.jpeg'
            ],
            [
                'name' => 'ANGGI RAHMAWATI',
                'nim'  => '2301010001',
                'bio'  => 'Mengerjakan bagian About',
                'img'  => 'images/anggi.jpg'
            ],
        ];

        return view('about', compact('profiles'));

    }
}
