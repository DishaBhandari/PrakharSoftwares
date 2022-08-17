<?php

namespace App\Http\Controllers\admin;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use App\Models\SildeUpdate;
use App\Models\HomeTestimonial;
use App\Models\HomeAbout;
use App\Http\Controllers\Controller;
use App\Models\HomeBrand;
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
    public function homeEditAbout()
    {
        $data =  HomeAbout::get();
        return view('admin.updateHomeAbout', compact('data'));
    }
    public function updateHomeAboutform(Request $data)
    {
        $data2 = $data->all();
        unset($data2['_token']);
        HomeAbout::where('id', $data['id'])->update($data2);;
        return "Home About Updated Successfully";
    }

    /**Update Testimonial Method 
     ****************************************************************/
    public function upadetHomeTestimonial()
    {
        $data = HomeTestimonial::get();
        return view('admin.upadetHomeTestimonial', compact('data'));
    }
    public function addTestimonial()
    {
        return view('admin.addTestimonial');
    }

    public function addTestimonialForm(Request $data)
    {
        Validator::validate($data->all(), [
            'image' => [
                'required',
                File::image()
                    ->max(1024),
            ],
        ]);
        $file = $data->file('image');
        $name = $file->hashName();
        $path = 'testimonial';
        $path = $file->move(
            public_path($path),
            $name
        );
        $data = $data->all();
        $data['image'] = $name;
        HomeTestimonial::create($data);
        return "Testimonial Added Successfully";
    }
    public function editTestimonial($id)
    {
        $data = HomeTestimonial::where('id', $id)->get();
        return view('admin.editTestimonial', compact('data'));
    }
    public function updateTestimonialForm(Request $data)
    {

        Validator::validate($data->all(), [
            'image' => [
                File::image()
                    ->max(1024),
            ],
        ]);

        $data2 = $data->all();
        unset($data2['image']);
        unset($data2['_token']);
        if ($data->hasFile('image')) {
            $img = HomeTestimonial::where('id', $data['id'])->get();
            foreach ($img as  $img) {
                $image_path = public_path('testimonial') . '\\' . $img->image;
                unlink($image_path);
            }

            $file = $data->file('image');
            $name = $file->hashName();
            $path = 'testimonial';
            $path = $file->move(
                public_path($path),
                $name
            );
            $data2['image'] = $name;
        }
        HomeTestimonial::where('id', $data2['id'])->update($data2);
        return "Testimonial Updated Successfully";
    }

    public function deleteTestimonial($id)
    {
        HomeTestimonial::where('id', $id)->delete();
        return redirect(url('upadetHomeTestimonial'));
    }

    /**Update Brand Method 
     ****************************************************************/

    public function updateHomeBrand()
    {
        $data =  HomeBrand::get();
        return view('admin.updateHomeBrand', compact('data'));
    }
    public function addBrand()
    {
        return view('admin.addBrand');
    }
    public function addbrandForm(Request $data)
    {
        Validator::validate($data->all(), [
            'image' => [
                'required',
                File::image()
                    ->max(1024),
            ],
        ]);
        $file = $data->file('image');
        $name = $file->hashName();
        $path = 'brand';
        $path = $file->move(
            public_path($path),
            $name
        );
        $data = $data->all();
        $data['image'] = $name;
        HomeBrand::create($data);
        return "Brand Added Successfully";
    }
    public function deletebrand($id)
    {
        HomeBrand::where('id', $id)->delete();
        return redirect(url('updateHomeBrand'));
    }
}
