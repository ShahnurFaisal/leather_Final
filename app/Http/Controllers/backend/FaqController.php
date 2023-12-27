<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function __construct(){
          $this->middleware('authAdmin');
    }

    public function faq(Request $request){
         $data = array();
         $data['active_menu'] = 'faq';
         $data['page_title'] = 'Faq';
         $data['faqs'] = DB::table('faqs')->select('id','question','answer','created_at')->get();
         if($request->isMethod('post')){
           try{
            Faq::create([
                'question' => $request->question,
                'answer' => $request->answer,
              ]);
              return redirect()->back()->with('success','Created Successfully');
           }catch(\Exception $e){
            return redirect()->back()->with('error','Failed Please Try Again');
           }
         }
        return view('backend.faq',compact('data'));
    }
    public function faq_delete($id){
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

        try {
                Faq::findOrFail($id)->delete();
            $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
        } catch (\Exception $e) {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
        }


    echo json_encode($server_response);
    }


}
