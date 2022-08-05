<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
            <li " . ($menuitem->submenu_count > 0 ? "class='nav-item dropdown costum'" : ($menuitem->parent_id == 0 ? "class='nav-item dropdown'" : "")) . ">
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

    // home page loading function 
    public function index()
    {
        $nav = $this->header(0);
        return view('main.index', compact('nav'));
    }
    // admin nav add nav function 
    public function nav()
    {
        $data = menuBar::where('submenu_count', 1)->get();
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
        $data2 = menuBar::where('submenu_count', 1)->get();
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
        menuBar::create($data);
        return "Nav Bar Added Successfully";
    }
}
