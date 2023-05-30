<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function sejarah()
    {
        return view('pages.sejarah');
    }

    public function awards()
    {
        return view('pages.awards');
    }

    public function visimisi()
    {
        return view('pages.visimisi');
    }

    public function penumpang()
    {
        return view('pages.penumpang');
    }

    public function pertanian()
    {
        return view('pages.pertanian');
    }

    public function niaga()
    {
        return view('pages.niaga');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function Shop()
    {
        return view('pages.Shop.Shop');
    }
    public function detail()
    {
        return view('pages.Shop.detailshop');
    }
    public function login()
    {
        return view('pages.Admin.login');
    }
    public function admin()
    {
        return view('pages.Admin.admin');
    }
    public function formsubmit(Request $req)
    {
        return $req-> input();
    }
    
}

