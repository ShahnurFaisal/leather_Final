<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerRequestController extends Controller
{
    public function __construct(){
             $this->middleware('authAdmin');
    }

    public function Customer_request_list(){
        $data['active_menu'] = 'customer_request_list';
        $data['page_title'] = 'Customer Request List';
        $data['custo_request_list'] = DB::table('customer_requests')->select('id','name','email','phone','message')->get();

        return view('backend.customer_request_list',compact('data'));
    }
    public function customer_request_delete($id){
        {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

            try {
                  $CustomerRequest=  CustomerRequest::findOrFail($id)->delete();
                $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
            } catch (\Exception $e) {
                $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
            }


        echo json_encode($server_response);
        }
    }

}
