<?php

namespace App\Http\Controllers\admin;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use App\Models\SildeUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeUpdateContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.HomeUpdate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addslide()
    {
        return  view('admin.addHomeSlide');
    }
    public function updateslide()
    {
        $data = SildeUpdate::get();
        return  view('admin.updateSlide', compact('data'));
    }
    public function addSlideform(Request $data)
    {

        Validator::validate($data->all(), [
            'bannerimg' => [
                'required',
                File::image()
                    ->max(1024),
            ],
        ]);
        $file = $data->file('bannerimg');
        $name = $file->hashName();
        $path = 'Home_Slide';
        $path = $file->move(
            public_path($path),
            $name
        );
        $data = $data->all();
        $data['bannerimg'] = $name;
        SildeUpdate::create($data);
        return "Slide Added Successfully";
    }
    public function updateSlideform(Request $data)
    {

        Validator::validate($data->all(), [
            'bannerimg' => [
                File::image()
                    ->max(1024),
            ],
        ]);

        $data2 = $data->all();
        unset($data2['bannerimg']);
        unset($data2['_token']);
        if ($data->hasFile('bannerimg')) {
            $img = SildeUpdate::where('id', $data['id'])->get();
            foreach ($img as  $img) {
                $image_path = public_path('Home_Slide') . '\\' . $img->bannerimg;
                unlink($image_path);
            }

            $file = $data->file('bannerimg');
            $name = $file->hashName();
            $path = 'Home_Slide';
            $path = $file->move(
                public_path($path),
                $name
            );
            $data2['bannerimg'] = $name;
        }
        SildeUpdate::where('id', $data['id'])->update($data2);
        return "Slide Updated Successfully";
    }
    public function editSlide($id)
    {


        $data =  SildeUpdate::where('id', $id)->get();
        return view('admin.updateSlideForm', compact('data'));
    }
}
