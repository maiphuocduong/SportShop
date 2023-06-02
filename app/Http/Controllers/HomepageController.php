<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }

    public function dotapnam()
    {
        return view('homepage.do-tap-nam');
    }
    public function donu()
    {
        return view('homepage.do-nu');
    }
    public function phukien()
    {
        return view('homepage.phu-kien');
    }
    public function chitietsanpham()
    {
        return view('homepage.chi-tiet-san-pham');
    }
    public function dangnhap()
    {
        return view('homepage.dang-nhap');
    }
    public function dangky()
    {
        return view('homepage.dang-ky');
    }
}
