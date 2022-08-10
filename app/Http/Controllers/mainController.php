<?php

namespace App\Http\Controllers;

use App\Http\Controllers\loadPage;

use App\Models\menuBar;
use Illuminate\Http\Request;

class mainController extends Controller
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
    // Main method 
    public function index($slug = "/")
    {
        $loadPage = new loadPage();
        switch ($slug) {
            case $slug == "/":
                return $this->home();
                break;
            case $slug == "about":
                return $this->about();
                break;
            case $slug == "contact":
                return $loadPage->contact();
                break;
            case $slug == "why-us":
                return $loadPage->whyus();
                break;
            case $slug == "products":
                return $loadPage->products();
                break;
            case $slug == "achievements":
                return $loadPage->achievements();
                break;
            case $slug == "careers":
                return $loadPage->careers();
                break;

            default:
                echo "No page found";
                break;
        }
    }
    // home method 
    public function home()
    {
        $nav = $this->header(0);
        return view('main.index', compact('nav'));
    }

    // about page loading function 
    public function about()
    {
        $nav = $this->header(0);
        return view('main.about', compact('nav'));
    }
}
