<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\menuBar;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function  header($parent_id)
    {
        $menu = "";
        $res = menuBar::where('parent_id', $parent_id)->orderBy('sort', 'ASC')->get();
        foreach ($res as $menuitem) {
            if ($menuitem->submenu_count== 0) {
            $menu .= "<option value='" . $menuitem->menu_id .
                "'>" . $menuitem->menu_name .
                "</option>";
            };
            if ($menuitem->submenu_count > 0) {
                $menu .= $this->header($menuitem->menu_id); //call  recursively}
            }
            $menu .= "
            </li>";
        }

        return $menu;
    }


    public function addService()
    {
        $data = $this->header(3);
        // $id = menuBar::where('menu_name', 'Services')->get();

        return view('admin.addService', compact('data'));
    }
    // summer note add image 
    public function create(Request $request)
    {
        $data = $request->all();
        $path = 'services';
        $ext = $request->file('files')->getClientOriginalExtension();
        $file_name = str_replace(":", "-", str_replace(" ", "-", Carbon::now()->toDateTimeString())) . "-" . $request->file('files')->getClientOriginalName();
        $request->file('files')->move(
            public_path($path),
            $file_name
        );
        $url = $path . "/" . $file_name;
        unset($data['files']);
        $data['files'] = $url;
        return asset($url);
    }
    // summer note delete image 
    public function delete(Request $item)
    {

        $file =  str_replace("http://127.0.0.1:8000/services/", "services\\", $item->deleteurl);
        $image_path = public_path($file);
        unlink($image_path);
    }
    public function postService(Request $req)
    {
        //dimensions:ratio=2/3
        $req->validate(
            [
                // 'menu_id' => 'required',
                // 'page_slug' => 'required',
                'menu_name' => 'required|unique:menu_bars',
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
                'page_name' => 'required',
                'banner' => 'required|mimes:jpg,jpeg,png|max:5120',
                'content' => 'required',
            ],
            [
                "banner.mimes" => "Only JPG, JPEG and PNG Image allowed.",
                "banner.max" => "Banner image size should me maximum 5 Mb.",
                "banner.dimensions" => "Banner image dimension should be 2:3."
            ]
        );
        // $data2 = [];
        // $data2['menu_name'] = $req->menu_name;
        // $data2['parent_id'] = $req->menu_id;
        // $data2['link'] = $req->page_slug;
        // $data2['submenu_count'] = 0;
        // $data3 = menuBar::where('parent_id', $req->menu_id)->count() + 1;
        // menuBar::where('menu_id', $req->menu_id)->update(['submenu_count' => $data3]);
        // menuBar::create($data2);
        $data = Service::where('menu_id', $req->menu_name)->count();
        if ($data == 0) {

            $path = public_path('main-documents/service');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $req->file('banner');
            $fileName =  $req->page_name . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
            unset($req['banner']);
            $service = new Service();
            $service->menu_id = $req->menu_name;
            $service->meta_title = $req->meta_title;
            $service->meta_keyword = $req->meta_keyword;
            $service->meta_description = $req->meta_description;
            $service->page_name = $req->page_name;
            $service->banner_image = $fileName;
            $service->page_data = $req->content;
            $service->save();

            return ('Page has been added for this sub-menu!');
        } else {
            return ('Page already exist for this sub-menu!');
        }
    }

    public function allService()
    {
        $data = Service::with('getMenu:menu_id,menu_name')->get();
        return view('admin.allService', compact('data'));
    }
}
