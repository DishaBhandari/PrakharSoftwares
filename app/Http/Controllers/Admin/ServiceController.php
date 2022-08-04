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
            $menu .= "<option value='" . $menuitem->menu_id .
            "'>" . $menuitem->menu_name .
                "</option>";
            if ($menuitem->submenu_count > 0) {
                $menu .= $this->header($menuitem->menu_id); //call  recursively}
            }
            $menu .= "
            </li>";
        }

        return $menu;
    }

    public function index()
    {
       echo "<select>".$this->header(3)."</select>";
        
    }
    public function addService()
    {   
        $id = menuBar::where('menu_name', 'Services')->first('menu_id')->menu_id;
        
        if(!empty($id)){
            $data = menuBar::where('menu_id', 3)->Where('submenu_count','0')->get('menu_id','menu_name');
        dd($data);

            return view('admin.addService', compact('data'));
        } else{
            return redirect()->route('addnav')->with('alert-error','Please create menu first!');
        }
      
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
    public function postAddService(Request $req)
    {
        $req->validate(
            [
                'sub_menu' => 'required|unique:menu_bars',
                // 'slug' => 'required',
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
                'page_name' => 'required',
                'banner' => 'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:ratio=3/2',
                'content' => 'required',
            ],
            message: [
                "banner.mimes" => [
                    "Only JPG, JPEG and PNG Image allowed."
                ],
                "banner.max" => [
                    "Banner image size should me maximum 5 Mb."
                ],
                "banner.dimensions" => [
                    "Banner image dimension should be 3:2."
                ]
            ]
        );

        $data = Service::where('menu_id', $req->sub_menu)->count();
        if ($data = 0) {

            $path = public_path('main-documents/service');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $req->file('banner');
            $fileName =  $req->slug . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $service = new Service();
            $service->menu_id = $req->sub_menu;
            // $service->page_slug    = $req->sub_menu;
            $service->meta_title = $req->sub_menu;
            $service->meta_keyword = $req->sub_menu;
            $service->meta_description = $req->sub_menu;
            $service->page_name = $req->sub_menu;
            $service->banner_image = $req->fileName;
            $service->page_data = $req->sub_menu;
            $service->save();

            return ('Page has been added for this sub-menu!');
        } else {
            return ('Page already exist for this sub-menu!');
        }
    }
}
