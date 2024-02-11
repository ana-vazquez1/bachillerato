<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function docentes()
    {
        return view('docentes');
    }

    public function calendario()
    {
        return view('calendario');
    }

    public function login()
    {
        return view('login');
    }
    public function info(){
        return view('info');
    }
}
