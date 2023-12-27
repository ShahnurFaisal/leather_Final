<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home(){
        $data = array();
        $data['active_menu'] = 'home';
        $data['page_title'] = 'Home';
        $data['banner']  = DB::table('banners')->select('photo','title','detail')->get();
        $data['comments']= DB::table('comments')->select('commentor_name','commentor_designation','comment')->get();
        $data['services']= DB::table('services')->select('title','description','photo')->get();
        $data['mission_vission'] = DB::table('mission_vissions')->select('mission','vission')->first();
        $data['categories'] = DB::table('categories')->select('id','category_name','photo')->take(6)->orderByDesc('priority')->get();
        $data['blog'] = DB::table('blogs')->select('id','title','photo','created_at')->take(3)->orderByDesc('priority')->get();
        $data['faqs'] = DB::table('faqs')->select('id','question','answer')->get();
        return view('frontend.pages.home',compact('data'));
    }
    public function about_us(){
        $data['active_menu'] = 'about_us';
        $data['page_title'] = 'About us';


        return view('frontend.pages.about_us', compact('data'));
    }
    public function contact(){
        $data['active_menu'] = 'contact';
        $data['page_title'] = 'Contact';
        return view('frontend.pages.contact',compact('data'));
    }
    public function Customer_request_add(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',

            'message'=> 'required|max:200',
        ]);
       try{

         CustomerRequest::create([
           'name'=> $request->name,
           'email'=> $request->email,
           'phone'=> $request->phone,
           'message'=> $request->message,
         ]);
        return back()->with('success','Your Request Submitted Successfully');
       }catch(\Exception $e){
        return back()->with('error','Failed Please Try Again Later');
       }
    }
    public function blog(){
        $data['active_menu'] = 'blog';
        $data['page_title'] = 'Blog';
        $data['blog'] = DB::table('blogs')->get();
        return view('frontend.pages.blog', compact('data'));
    }
    public function single_blog($id){
        $data['active_menu'] = 'blog';
        $data['page_title'] = 'Blog';
        $data['single_blog'] = Blog::find($id);
        $data['recent_blogs'] = DB::table('blogs')->select('id','title','photo','created_at','description')->orderByDesc('priority')->limit(3)->get();
        $data['related_blogs'] = DB::table('blogs')->select('id','title','photo','created_at','description')->orderByDesc('priority')->limit(5)->get();
        return view('frontend.pages.single_blog', compact('data'));
    }
    public function product(){
        $data['active_menu'] = 'product';
        $data['page_title'] = 'Product';
        $data['category'] = DB::table('categories')->select('id','category_name')->get();
        $category_id =null;
        $data_limit=10;
        $data['product'] = DB::table('products')
        ->leftJoin('categories','categories.id','=','products.category_id')
        ->select('products.id','products.name','products.description','products.photo','categories.category_name')->paginate($data_limit);
        return view('frontend.pages.product', compact('data'));
    }

    public function product_by_category(){
        $data['active_menu'] = 'product';
        $data['page_title'] = 'Product';
        $category_id = request('category_id');
        $data['product'] = $this->get_product_list($category_id);
        return view('frontend.components.products_by_category',compact('data'));
    }
    private function get_product_list($category_id=null){

         $product = DB::table('products')
         ->leftJoin('categories','categories.id','=','products.category_id')
         ->select('products.id','products.name','products.description','products.photo','categories.category_name');
         if($category_id != null){
            $product->where('category_id',$category_id);
         }
           return $product->get();
   }

    public function single_product(){
        $data = array();
        $data['active_menu'] = 'single_product';
        $data['page_title'] = ' Single product';
        return view('frontend.pages.single_product',compact('data'));
    }
  public function services(){
    $data['active_menu'] = 'services';
    $data['page_title'] = ' Services';
    $data['services']= DB::table('services')->select('title','description','photo')->get();

    return view('frontend.pages.services',compact('data'));
  }
}
