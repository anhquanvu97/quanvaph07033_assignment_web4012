<?php

namespace App\Http\Controllers\frontend;
use App\Models\{User,Post,Comment};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
       $posts = Post::all();

        return view('frontend.home.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post){
        $data['detail']=Post::find($post);
        if($data['detail'] != null){
        $data['comments']=Comment::where([['post_id', $post],['is_active', '1'],])->orderBy('id','desc')->get();
        return view('frontend.home.detail',$data);
        }else{
            return redirect()->back();
        }
        
    }






































}
