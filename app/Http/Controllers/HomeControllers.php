<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menuBar;

class HomeControllers extends Controller
{
    public function  header($parent_id)
    {
        $menu = "";
        $res = menuBar::where('parent_id', $parent_id)->orderBy('sort', 'ASC')->get();
        foreach ($res as $menuitem) {
            $menu .= "<li class='" . ($menuitem->submenu_count > 0 ? "nav-item dropdown" : "") . "'><a href='" . $menuitem->link . "' class=' " . ($menuitem->submenu_count > 0 ? "nav-link dropdown-toggle dropdown-indicator" : "dropdown-item") . "'
            href='JavaScript:void(0)' role='button' data-bs-toggle='dropdown' aria-expanded='false' >" . $menuitem->menu_name . "</a>";

            $menu .= "<ul class='dropdown-menu'>" . $this->header($menuitem->menu_id) . "</ul>"; //call  recursively

            $menu .= "</li>";
        }

        return $menu;
    }
    public function index()
    {
        $nav2 = menuBar::get();
        foreach ($nav2 as $n) {
            $n2 = menuBar::where('parent_id', $n->menu_id)->get();
            menuBar::where('menu_id', $n->menu_id)->update(['submenu_count' => count($n2)]);
        }
        $nav = $this->header(0);
        return view('main.index', compact('nav'));
    }
    public function nav()
    {
        $data = menuBar::get();
        return view('admin.addNav', compact('data'));
    }
    public function addnavform(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $request->validate([
            'menu_name' => 'required|unique:menu_bars',
            'link' => 'required',
            'sort' => 'required'
        ]);
        if ($data['parent_id'] > 0) {
            $count = menuBar::where('parent_id',$data['parent_id'])->get();
            $count = count($count);
            $count = $count + 1;
            menuBar::where("menu_id",$data['parent_id'])->update(['submenu_count'=>$count]);
        } 
       
        $data['submenu_count'] = 0;
        menuBar::create($data);
        return "Nav Bar Added Successfully";
    }
}
