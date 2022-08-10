<?php

namespace App\Http\Controllers;

use App\Models\menuBar;
use Illuminate\Http\Request;

class loadPage extends Controller
{
    public function  header($parent_id)
    {
        $menu = "";
        $res = menuBar::where('parent_id', $parent_id)->orderBy('sort', 'ASC')->get();
        foreach ($res as $menuitem) {
            $menu .= "
            <li " . ($menuitem->submenu_count > 0 ? "class='nav-item dropdown costum" . ($menuitem->parent_id == 0 ? " dropdown0" : "") . "'" : ($menuitem->parent_id == 0 ? "class='nav-item dropdown'" : "")) . ">
            <a href='" . ($menuitem->submenu_count > 0 ? "javascript:void(0)" : url($menuitem->link)) . "' " . ($menuitem->submenu_count > 0 ? "class='nav-link  dropdown-indicator '  role='button' aria-expanded='false'" : ($menuitem->parent_id == 0 ? "class='nav-link' role='button'" : "class='dropdown-item'")) . ">
             " . $menuitem->menu_name .
                "
                </a>";
            if ($menuitem->submenu_count > 0) {
                $menu .= "
                <ul class='dropdown-menu'>" . $this->header($menuitem->menu_id) . "</ul>"; //call  recursively}
            }
            $menu .= "
            </li>";
        }

        return $menu;
    }


    // about page loading function 
    public function about()
    {
        $nav = $this->header(0);
        return view('main.about', compact('nav'));
    }
    // contact page loading function 
    public function contact()
    {
        $nav = $this->header(0);
        return view('main.contact', compact('nav'));
    }
    public function products()
    {
        $nav = $this->header(0);
        return view('main.products', compact('nav'));
    }
    public function whyus()
    {
        $nav = $this->header(0);
        return view('main.why-us', compact('nav'));
    }
    public function achievements()
    {
        $nav = $this->header(0);
        return view('main.achievements', compact('nav'));
    }
    public function careers()
    {
        $nav = $this->header(0);
        return view('main.careers', compact('nav'));
    }
}
