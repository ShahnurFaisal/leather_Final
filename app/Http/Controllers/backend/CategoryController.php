<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PDOException;

class CategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware('authAdmin');
    }
    public function category_add(){
        $data = array();
        $data['active_menu'] = 'category_add';
        $data['page_title'] = 'Category Add';
        if(request()->isMethod('post')){

         try{

            if(request()->hasFile('photo')){
                $extension = request()->file('photo')->extension();
                $photo_name= "backend/img/category/".uniqid().'.'.$extension;
                request()->file('photo')->move('backend/img/category', $photo_name);

            }else{
                $photo_name = null;
            }
            Category::create([
                'category_name' => request('category_name'),
                'priority' => request('priority'),
                'photo'=>$photo_name
           ]);
           return redirect()->back()->with('success', 'Category Created Successfully');
         }catch(PDOException $e){
            return redirect()->back()->with('error', 'Failed Please Try Again');
         }
        }
        return view('backend.category.category_add',compact('data'));
    }
    public function category_edit($id){
        $data = array();
        $data['active_menu'] = 'category_edit';
        $data['page_title'] = 'Category Edit';
        $data['category'] = Category::findOrFail($id);
        if(request()->isMethod('post')){
            $category_photo = $data['category']->photo;


                if(request()->hasFile('photo')){
                    $extension = request()->file('photo')->extension();
                    $photo_name= "backend/img/category/".uniqid().'.'.$extension;
                    request()->file('photo')->move('backend/img/category', $photo_name);
                    if(File::exists($category_photo)){
                        File::delete($category_photo);
                    }
                }else{
                    $photo_name = $category_photo;
                }
         try{

            $data['category']->update([
                'category_name' => request('category_name'),
                'photo'=>$photo_name,
                'priority' => request('priority'),
           ]);
           return redirect()->back()->with('success', 'Category Updated Successfully');
         }catch(PDOException $e){
            return redirect()->back()->with('error', 'Failed Please Try Again');
         }
        }

        return view('backend.category.category_edit',compact('data'));
    }


    public function category_list(){
        $data = array();
        $data['active_menu'] = 'category_list';
        $data['page_title'] = 'Category List';
        $data['category_list'] = DB::table('categories')->select('id','category_name','priority','created_at')->orderByDesc('priority')->get();
        return view('backend.category.category_list',compact('data'));
    }
    public function category_delete($id){
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

        try {
              $Category=  Category::findOrFail($id)->delete();
            $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
        } catch (\Exception $e) {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
        }


    echo json_encode($server_response);
    }

    // subcategory start

    public function subcategory_list(){
        $data = array();
        $data['active_menu'] = 'subcategory';
        $data['page_title'] = 'Subcategory';
        $data['category_list'] = DB::table('categories')->select('id','category_name')->get();
        $data['subcategory_list'] = DB::table('sub_categories')
        ->leftJoin('categories','categories.id','=','sub_categories.category_id')
        ->select('sub_categories.id','categories.category_name','sub_categories.name','sub_categories.priority','sub_categories.category_id')->orderBy('categories.priority')->get();
        return view('backend.category.subcategory', compact('data'));
    }
    public function subcategory_add(Request $request){

      try{
        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'priority' => $request->priority,
         ]);
         return back()->with('success','Subcategory Added Successfully');
      }catch(\Exception $e){
        return back()->with('error','Failed please Try Again');
      }
    }
    public function subcategory_edit(Request $request){
               $id = $request->id;
               if($id > 0){
               $subcategory_id = SubCategory::find($id);
               }else{
                      return back()->with('error','Failed please Try Again');

               }
      try{
        $subcategory_id->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'priority' => $request->priority,
         ]);
         return back()->with('success','Subcategory Added Successfully');
      }catch(\Exception $e){
        return back()->with('error','Failed please Try Again');
      }
    }

    public function subcategory_delete($id){
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

            try {
             SubCategory::findOrFail($id)->delete();

                $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
            } catch (PDOException $e) {
                $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
            }


        echo json_encode($server_response);
    }
}
