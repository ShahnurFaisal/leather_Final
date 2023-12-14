<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerAdd()
    {
        $data = array();
    $data['active_menu'] = 'banner_add';
    $data['page_title'] = 'Banner Add';
    $banner = Banner::where('id', 1)->first();

    if (request()->isMethod('post')) {
        try {
            if (request()->hasFile('photo')) {
                $extension = request()->file('photo')->extension();
                $image_name = 'backend/img/banner/' . '_' . uniqid() . '_' . $extension;
                request()->file('photo')->move(public_path('backend/img/banner'), $image_name);
            } else {
                $image_name = null;
            }
            $banner->update([
                'title' => request('title'),
                'detail' => request('detail'),
                'photo' => request()->file('photo') ? $image_name : $banner->photo,
               
            ]);

            return back()->with('success', 'Banner Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Failed, please try again');
        }
    }
        return view('backend.banner.bannerAdd',compact('data','banner'));
    }
}

