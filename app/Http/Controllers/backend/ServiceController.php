<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PDOException;

class ServiceController extends Controller
{
    public function service_add(Request $request){
        $data = array();
        $data['active_menu'] = 'service_add';
        $data['page_title'] = 'Service Add';
        if($request->isMethod('post')){
            if(request()->hasFile('photo')){
                $extension = request()->file('photo')->extension();
                $photo_name= "backend/img/service/".uniqid().'.'.$extension;
                request()->file('photo')->move('backend/img/service', $photo_name);
            }else{
                $photo_name = '';
            }
            try{
                   Service::create([
                    'photo'=> $photo_name,
                    'title'=> $request->title,
                    'description'=> $request->description,
                    'priority'=> $request->priority,
                   ]);
                return redirect()->back()->with('success','Service Added Successfully');
            }catch(PDOException $e){
                return redirect()->back()->with('error','Failed Please Try Again');
            }
        }
        return view('backend.service.service_add',compact('data'));
    }
    public function service_edit($id,Request  $request){
        $data = array();
        $data['active_menu'] = 'service_edit';
        $data['page_title'] = 'Service Edit';
        $data['service'] = Service::findOrFail($id);
        $photo = $data['service']->photo;
         if($request->isMethod('post')){
            if(request()->hasFile('photo')){
                $extension = request()->file('photo')->extension();
                $photo_name= "backend/img/service/".uniqid().'.'.$extension;
                request()->file('photo')->move('backend/img/service', $photo_name);
                if(File::exists($photo)){
                    File::delete($photo);  
                }
            }else{
                $photo_name = $photo;
            }
            try{
                $data['service']->update([
                    'photo'=> $photo_name,
                    'title'=> $request->title,
                    'description'=> $request->description,
                    'priority'=> $request->priority,
                   ]);
                return redirect()->back()->with('success','Service Updated Successfully');
            }catch(PDOException $e){
                return redirect()->back()->with('error','Failed Please Try Again'.$e->getMessage());
            }
        }
        return view('backend.service.service_edit',compact('data'));
    }
    public function service_list(){
        $data = array();
        $data['active_menu'] = 'service_list';
        $data['page_title'] = 'Service List';
        $data['service'] = DB::table('services')->select('id','photo','title','description','priority','created_at')->orderByDesc('priority')->get();
        return view('backend.service.service_list',compact('data'));
    }

    public function service_delete($id){
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

        try {
              $service =  Service::findOrFail($id);
                $service_photo = $service->photo;
                if(File::exists($service_photo)){
                    File::delete($service_photo);
                }
                $service->delete();
            $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
        } catch (\Exception $e) {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
        }


    echo json_encode($server_response);
    }
}
