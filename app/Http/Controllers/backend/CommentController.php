<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;

class CommentController extends Controller
{
    public function __construct()
    {
       $this->middleware('authAdmin');
    }
    public function comment_add(Request $request){
        $data=array();
        $data['active_menu']= 'comment_add';
        $data['page_title']= 'Comment Add';
         if($request->isMethod('post')){
            try{
                Comment::create([
                    'comment' => $request->comment,
                    'commentor_name' => $request->commentor_name,
                    'commentor_designation' => $request->commentor_designation,
                    'priority' => $request->priority,
                ]);
                return redirect()->back()->with('success','Comment Created Successfully');
            }catch(PDOException $e){
                return redirect()->back()->with('error',' Failed Please Try Again');
            }

         }
        return view('backend.comment.comment_add',compact('data'));
    }
    public function comment_edit($id, Request $request){
        $data=array();
        $data['active_menu']= 'comment_edit';
        $data['page_title']= 'Comment Edit';
        $data['comment'] = Comment::findOrFail($id);
        if($request->isMethod('post')){
            try{
                $data['comment']->update([
                    'comment' => $request->comment,
                    'commentor_name' => $request->commentor_name,
                    'commentor_designation' => $request->commentor_designation,
                    'priority' => $request->priority,
                ]);
                return redirect()->back()->with('success','Comment Updated Successfully');
            }catch(PDOException $e){
                return redirect()->back()->with('error',' Failed Please Try Again');
            }

         }
        return view('backend.comment.comment_edit',compact('data'));
    }
    public function comment_list(){
        $data=array();
        $data['active_menu']= 'comment_list';
        $data['page_title']= 'Comment List';
        $data['comment_list'] = DB::table('comments')->select('id','comment','commentor_name','commentor_designation','priority')->orderByDesc('priority')->get();
        return view('backend.comment.comment_list',compact('data'));
    }
    public function comment_delete($id){
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

        try {
                Comment::findOrFail($id)->delete();
            $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
        } catch (\Exception $e) {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
        }


    echo json_encode($server_response);
    }
}
