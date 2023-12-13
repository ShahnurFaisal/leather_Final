<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct()
    {
          $this->middleware('authAdmin');
    }
    public function profile_update(Request $request){
         $data['active_menu'] = 'profile';
         $data['page_title'] = 'Profile';
         $user_id = Auth::guard('admin')->id();
         $data['user'] = Admin::findOrfail($user_id);

         if($request->isMethod('post')){
            $user_photo = $data['user']->photo;

            try{
                if(request()->hasFile('photo')){
                    $extension = request()->file('photo')->extension();
                    $photo_name= "backend/img/admin/".uniqid().'.'.$extension;
                    request()->file('photo')->move('backend/img/admin', $photo_name);
                    if(File::exists($user_photo)){
                        File::delete($user_photo);
                    }
                }else{
                    $photo_name = $user_photo;
                }
                $data['user']->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo' => $photo_name,

                ]);
                return back()->with('success','Profile Updated Successfully');
            }catch(\Exception $e){
                return back()->with('error','Failed To Update Profile');
            }
         }
        return view('backend.profile',compact('data'));
    }

}
