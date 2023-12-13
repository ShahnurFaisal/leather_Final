<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PDOException;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('authAdmin');
    }

    public function product_add(Request $request)
    {
        $data = array();
        $data['active_menu'] = 'product_add';
        $data['page_title'] = 'Product Add';
        $data['category_list'] = DB::table('categories')->select('id', 'category_name')->get();
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'category_id' => 'required',
                'photo' => 'required|max:2000',
                'description' => 'required',
                'priority' => 'required',
                'title'=>'required',
                'details'=>'required'
            ]);
            // $hhh = request()->file('photo_gallery');
            // dd($hhh);
            try{
                
                $title = $request->title;
                $details = $request->details;
                $title_count = count($title);
                $array = array();
                for($i=0;$i<$title_count;$i++){
                    $array[$title[$i]] = $details[$i];
                }
                $characteristics = json_encode($array, JSON_UNESCAPED_UNICODE);
                if(request()->hasFile('photo')){
                    $extension = request()->file('photo')->extension();
                    $photo_name= "backend/img/product/".uniqid().'.'.$extension;
                    request()->file('photo')->move('backend/img/product', $photo_name);
                }else{
                    $photo_name = null;
                }
                $images = [];
                $files = request()->file('photo_gallery');
               
                if ($files ) {
                    foreach ($files as $file) {
                       
                        $extension = $file->Extension();
                        $image = "backend/img/product_gallery/" . uniqid() . '.' . $extension;
                        $file->move('backend/img/product_gallery', $image);
                        // Save image name to the array
                        $images[] = $image;
                    }
                   
                }
                
            
                // Save data to the database
                Product::create([
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'photo' => $photo_name,
                    'description' => $request->description,
                    'priority' => $request->priority,
                    'characteristics' => $request->characteristics,
                    'primary_description' => $request->primary_description,
                    'photo_gallery' => json_encode($images),
                ]);
                return back()->with('success','Prdoduct Added Successfully');
            }catch(\Exception $e){
                return back()->with('error','Failed To Add Product'.$e->getMessage());
            }

        }
        return view('backend.product.add', compact('data'));
    }
    public function product_subcategory_show()
    {
        $category_id = request('category_id');
        $subcategory = DB::table('sub_categories')->select('id', 'name')->where('category_id', $category_id)->get();
        //    return $subcategory;
        $response = [
            'success' => true,
            'subcategory' => $subcategory,
        ];
        return response()->json($response);
    }
    public function product_edit(Request $request, $id)
    {
        $data = array();
        $data['active_menu'] = 'product_edit';
        $data['page_title'] = 'Product Edit';
        $data['category_list'] = DB::table('categories')->select('id', 'category_name')->get();
        $data['product'] = Product::find($id);
       
        $product_photo = $data['product']->photo;
        $product_photo_gallery = $data['product']->photo_gallery;

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'priority' => 'required',
            ]);
            try{
                $title = $request->title;
                $details = $request->details;
                $title_count = count($title);
                $array = array();
                for($i=0;$i<$title_count;$i++){
                    $array[$title[$i]] = $details[$i];
                }
                $characteristics = json_encode($array, JSON_UNESCAPED_UNICODE);
                if(request()->hasFile('photo')){
                    $extension = request()->file('photo')->extension();
                    $photo_name= "backend/img/product/".uniqid().'.'.$extension;
                    request()->file('photo')->move('backend/img/product', $photo_name);
                    if(File::exists($product_photo)){
                        File::delete($product_photo);
                    }
                }else{
                    $photo_name = $product_photo;
                }
                if ($files = request()->file('photo_gallery')) {

                    foreach ($files as $file) {
    
                        $extension = $file->getClientOriginalExtension();
                        $photoName = "backend/img/product_gallery/" . uniqid() . '.' . $extension;
                        $file->move('backend/img/product_gallery', $photoName);
    
                        // Save image name to the array
                        $images[] = $photoName;
                    }
                }else{
                    $photo_name = null;
                }
                // if (request()->file('image')) {
                    $data['product']->update([
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'photo' => $photo_name,
                    'description' => $request->description,
                    'priority' => $request->priority,
                    'characteristics'=>$characteristics,
                    'primary_description' =>$request->primary_description,
                    'photo_gallery' => json_encode($images),
                      ]);
                    // }
                return back()->with('success','Prdoduct Updated Successfully');
            }catch(PDOException $e){
                return back()->with('error','Failed To Update Product');
            }

        }
        return view('backend.product.edit', compact('data'));
    }
    public function product_list()
    {
        $data = array();
        $data['active_menu'] = 'product_list';
        $data['page_title'] = 'Product List';
        $data['product_list'] = DB::table('products')
                                ->leftJoin('categories','categories.id','=','products.category_id')
                             
                                ->select('products.id','products.name as product_name','products.photo','products.priority','categories.category_name')->orderByDesc('priority')->get();


         return view('backend.product.list', compact('data'));
    }
    public function product_delete($id)
    {
        $server_response = array('status' => 'FAILED', 'message' => 'Not Found');

        try {
              $product=  Product::findOrFail($id);
              $product_photo = $product->photo;
              if(File::exists($product_photo)){
                File::delete($product_photo);
              }
              $product->delete();

            $server_response = array('status' => 'SUCCESS', 'message' => 'Successfully Deleted');
        } catch (\Exception $e) {
            $server_response = array('status' => 'FAILED', 'message' => 'Not Found');
        }


    echo json_encode($server_response);
    }

}
