<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MissionVission;
use Illuminate\Http\Request;

class MisssionVissionController extends Controller
{
    public function mission_vission(Request $request){
        $data = array();
        $data['active_menu'] = 'mission_vission';
        $data['page_title'] = 'Mission Vission';
        $id = 1;
        $data['mission_vission'] = MissionVission::find($id);

        if($request->isMethod('post')){
           try{
            if($data['mission_vission']){
               $data['mission_vission']->update([
                    'mission' => $request->mission,
                    'vission' => $request->vission,
               ]);
            }else{
               MissionVission::create([
                'id' => 1,
                'mission' => $request->mission,
                'vission' => $request->vission,
               ]);
            }
            return redirect()->back()->with('success','Mission Vission Updated Successfully');
           }catch(\PDOException $e){
            return redirect()->back()->with('error','Failed Please Try Again');
           }
        }
        return view('backend.mission_vission.mission_vission',compact('data'));
    }
}
