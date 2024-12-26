<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function search(): string
    {
        return view('search');
    }

    public function images($file)
    {
        return $this->response->download(WRITEPATH . 'uploads/images/' . $file, null);
    }
}