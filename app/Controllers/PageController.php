<?php
namespace App\Controllers;

class PageController
{
    public function home()
    {
        return view('home');
    }

    public function folder1()
    {
        return view('folder1');
    }

    public function folder2()
    {
        return view('folder2');
    }
}
