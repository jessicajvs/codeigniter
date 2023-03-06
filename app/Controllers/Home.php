<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Dashboard',
        ];
        
        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }
    
}
