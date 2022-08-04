<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function addService(){
        $data = menuBar::where;
        return view('admin.addService', compact($data));
    }

    public function postAddService(Request $req){
        $req->validate([
            'sub_menu' => 'required|unique:menu_bars',
            'slug' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'page_name' => 'required',
            'banner' =>'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:ratio=3/2',
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
        ]);

        $data = Service::where('menu_id', $req->sub_menu)->count();
        if($data = 0){

            $path = public_path('main-documents/service');
            if ( !file_exists($path) ) {
                mkdir($path, 0777, true);
            }    
            $file = $req->file('banner');    
            $fileName =  $req->slug.'.'. $file->getClientOriginalExtension();                    
            $file->move($path, $fileName);

            $service = new Service();
            $service->menu_id = $req->sub_menu;
            $service->page_slug	= $req->sub_menu;
            $service->meta_title = $req->sub_menu;
            $service->meta_keyword = $req->sub_menu;
            $service->meta_description = $req->sub_menu;
            $service->page_name = $req->sub_menu;
            $service->banner_image = $req->fileName;
            $service->page_data = $req->sub_menu;
            $service->save();

            return('Page has been added for this sub-menu!');
        } else{
           return('Page already exist for this sub-menu!');
        }
    }

}