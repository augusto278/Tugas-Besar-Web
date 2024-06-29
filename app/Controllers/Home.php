<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tugas Besar CI4'
        ];

        return view('home', $data);
    }
}
