<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function __construct()
    {
            $this->middleware('authAdmin');
    }
    public function blog_add(Request $request){
        $data =array();
        $data['active_menu'] = 'blog_add';
        $data['page_title'] = 'blog Add';
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
                'photo' => 'required|max:2000',
                'description' => 'required',
                'priority' => 'required|integer',
            ]);
            try{
                if(request()->hasFile('photo')){
                    $extension = request()->file('photo')->extension();
                    $photo_name= "backend/img/blog/".uniqid().'.'.$extension;
                    request()->file('photo')->move('backend/img/blog', $photo_name);
                }else{
                    $photo_name = null;
                }
                Blog::create([
                    'title' => $request->title,
                    'photo' => $photo_name,
                    'description' => $request->description,
                    'priority' => $request->priority,
                ]);
                return back()->with('success','Blog Added Successfully');
            }catch(\Exception $e){
                return back()->with('error','Failed To Add Blog'.$e->getMessage());
            }

        }
         return view('backend.blog.add',compact('data'));
    }
    public function blog_edit(Request $request, $id){
        $data =array();
        $data['active_menu'] = 'blog_edit';
        $data['page_title'] = 'blog Edit';
        $data['blog'] = Blog::findOrFail($id);
        $blog_photo = $data['blog']->photo;
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'priority' => 'required',
            ]);
            try{
                if(request()->hasFile('photo')){
                    $extension = request()->file('photo')->extension();
                    $photo_name= "backend/img/blog/".uniqid().'.'.$extension;
                    request()->file('photo')->move('backend/img/blog', $photo_name);
                    if(File::exists($blog_photo)){
                        File::delete($blog_photo);
                    }
                }else{
                    $photo_name = $blog_photo;
                }
                $data['blog']->update([
                    'title' => $request->title,
                    'photo' => $photo_name,
                    'description' => $request->description,
                    'priority' => $request->priority,
                ]);
                return back()->with('success','Blog Updated Successfully');
            }catch(\Exception $e){
                return back()->with('error','Failed To Update Blog');
            }

        }
         return view('backend.blog.edit',compact('data'));
    }
    public function blog_list(){
        $data =array();
        $data['active_menu'] = 'blog_list';
        $data['page_title'] = 'blog List';
        $data['blog_list'] = DB::table('blogs')->select('id','title','photo','priority','created_at','description')->orderBy('priority')->get();
         return view('backend.blog.list',compact('data'));
    }
    public function blog_delete($id){
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

        try {
                Blog::findOrFail($id)->delete();
            $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
        } catch (\Exception $e) {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
        }


    echo json_encode($server_response);
    }
}
