<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function menu()
    {
        return view('menu');
    }
    public function user_login()
    {
        return view('user_login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function cart()
    {
        return view('cart');
    }
    public function userpanel()
    {
        return view('userpanel');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function ourhistory()
    {
        return view('ourhistory');
    }
    public function dashboard()
    {
        return view('admin_panel.dashboard');
    }
    public function login()
    {
        return view('admin_panel.login');
    }
    public function allcategories()
    {
        return view('admin_panel.categories.index');
    }

    public function addcategory()
    {
        return view('admin_panel.categories.create');
    }
    public function allitems()
    {
        return view('admin_panel.menus.index');
    }

    public function addmenu()
    {
        return view('admin_panel.menus.create');
    }
    public function active_pizza()
    {
        return view('admin_panel.menus.active');
    }
    public function addslider()
    {
        return view('admin_panel.sliders.create');
    }
    public function allslider()
    {
        return view('admin_panel.sliders.index');
    }

}
