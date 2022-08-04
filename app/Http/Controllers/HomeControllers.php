<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menuBar;

class HomeControllers extends Controller
{
    // nave bar gettting function 
    public function  header($parent_id)
    {
        $menu = "";
        $res = menuBar::where('parent_id', $parent_id)->orderBy('sort', 'ASC')->get();
        foreach ($res as $menuitem) {
            $menu .= "
            <li " . ($menuitem->submenu_count > 0 || $menuitem->parent_id == '0' ? "class='nav-item dropdown'" : "") . ">
            <a href='" . url($menuitem->link) . "' " . ($menuitem->submenu_count > 0 ? "class='nav-link dropdown-toggle dropdown-indicator'  role='button' data-bs-toggle='dropdown' aria-expanded='false'" : ($menuitem->parent_id == 0 ? "class='nav-link' role='button'" : "class='dropdown-item'")) . ">
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

    // home page loading function 
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
    // admin nav add nav function 
    public function nav()
    {
        $data = menuBar::get();
        return view('admin.addNav', compact('data'));
    }
    // all nav loading function in admin 
    public function allnav()
    {
        $data = menuBar::get();
        return view('admin.allnav', compact('data'));
    }
    // nav bar edit function 
    public function edit($id)
    {
        $data = menuBar::where('menu_id', $id)->get();
        $data2 = menuBar::get();
        return view('admin.editnav', compact('data', 'data2'));
    }
    // Update nav bar 
    public function update(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $request->validate([
            'link' => 'required',
            'sort' => 'required'
        ]);
        menuBar::where('menu_id',  $request->menu_id)->update($data);
        return "Navbar Updated Successfully";
    }
    // delete nav method 
    public function delete($id)
    {
        menuBar::where('menu_id', $id)->delete();
        return redirect('allnav');
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
            $count = menuBar::where('parent_id', $data['parent_id'])->get();
            $count = count($count);
            $count = $count + 1;
            menuBar::where("menu_id", $data['parent_id'])->update(['submenu_count' => $count]);
        }

        $data['submenu_count'] = 0;
        menuBar::create($data);
        return "Nav Bar Added Successfully";
    }
}
