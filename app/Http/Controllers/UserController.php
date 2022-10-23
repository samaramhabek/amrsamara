<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use APP\Post;
class UserController extends Controller
{
    //
   
public function index(){
        $users = User::with('posts')->get();
      // dd($users);
       return view('pages.posts_users' , ['users' => $users]);
   }
    
    
    
    
    
   //
      public function register(Request $r){
        //  return view('pages.addposts',['add'=>$r]);
          
       
      
        $user=new User;
        $user->name=$r->name;  
        $user->email=$r->email;
        $user->password=$r->pass;
       
        $user->save();
        return redirect('/post');
          
      }
    
    
    
    
    
    
    
}

