<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class postController extends Controller
{
    //
    
public function index(){
        $posts = Post::all();
      // dd($users);
     // return view('pages.test' , ['posts' => $posts]);
    return view('pages.posts',['posts'=>$posts]);

   }
    //  public function view($id)
   // {
        
     //   $res = Post::find($id);
       // $res1 = Post::all();
     
    //    return view('pages.details', ['post'=>$res]);
         //   ->with('post', $res)
          //  ->with('posts', $res1)
             
   // }
    
    //  public function view($id){
      //    $posts=Post::where('id',$id)->get();
          
        //  return view('pages.details',['detailspost'=>$posts]);
          
          
    //  }
    //  public function store(Request $r){
        //  return view('pages.addposts',['add'=>$r]);
          
       public function store(Request $r){
         
           $validateData = $r->validate([
               
              'name'=>['required','max:255'] ,
               'price'=>['required'],
               'address'=>['required'],
           
           
           
           ] );
           
           
        $post=new POST;
        $post->imge_name=$r->inp_files;
        $post->name=$r->name;
         $post->user_id=2;
        $post->description=$r->description;
        $post->address=$r->address;
    $post->price=$r->price;  
       $post->save();
        return redirect('/post');
          
      }
     public function show($id){
         $post=Post::find($id);
             return view('pages.details',['post'=>$post]);
    
}
    
    public function search(Request $r){
        
        
         if($r->query("n")){
            $name = $r->query("n");
         }
        
        if(isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `posts` WHERE lower(name) like '%$name%'" ) );
          //dd("SELECT * FROM `posts` WHERE lower(name) like '%$name%'" );
           // $a = 1;
        
       
        return view('pages.searchs')
            ->with('posts', $sRes);
         
        
    }
    
    }
    
    
    
    
    
    
    
    
    
}