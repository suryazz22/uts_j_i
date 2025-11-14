<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $places = [
            ['img' => asset('images/acropolis.jpg'), 'title' => 'Acropolis, Yunani'],
            ['img' => asset('images/shibuya.jpg'), 'title' => 'Shibuya, Jepang'],
            ['img' => asset('images/cappadocia.webp'), 'title' => 'Cappadocia, Turki'],
            ['img' => asset('images/giza.webp'), 'title' => 'Giza, Mesir'],
            ['img' => asset('images/garuda.jpg'), 'title' => 'Garuda Wisnu Kencana, Bali'],
            ['img' => asset('images/huayana.jpg'), 'title' => 'Huayana, Peru'],
            ['img' => asset('images/jumeirah.jpg'), 'title' => 'Jumeirah, Abu Dhabi'],
            ['img' => asset('images/newyork.jpg'), 'title' => 'New York, USA'],
            ['img' => asset('images/niagara.jpg'), 'title' => 'Niagara, Kanada'],
        ];

        return view('home', compact('places'));
    }
}
