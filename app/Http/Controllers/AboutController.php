<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        return $this->middleware('authAdmin');
    }
    public function aboutAdd()
    {
        $about = About::where('id',1)->first();

        $data = array();
        $data['active_menu'] = 'about_add';
        $data['page_title'] = 'about Update';
        if(request()->isMethod('post')){
            try {
                if(request()->hasFile('image')){
                    $extension = request()->file('image')->extension();


                    $imageName = 'backend/img/about/'.'_'.uniqid().'.'.$extension;

                    request()->file('image')->move(public_path('backend/img/about'), $imageName);
                }else{
                    $imageName = null;
                }
                $about = About::where('id',1)->first();
                $about->update([
                    'title' => request('title'),
                    'description' => request('description'),
                    'email' => request('email'),
                    'address' => request('address'),
                    'phone' => request('phone'),
                    'image' => $imageName,
                    'web_link' => request('web_link'),
                    'web_link' => request('web_link'),
                ]);
                return back()->with('success','About Updated Successfully');
            } catch (\Throwable $th) {
                return back()->with('error','Failed please Try Again');

            }
        }
        return view('backend.about.about_add',compact('data','about'));
    }
}
