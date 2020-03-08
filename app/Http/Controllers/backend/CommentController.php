<?php

namespace App\Http\Controllers\backend;
use App\Models\{User,Comment,Post,Category};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\{CommentRequest};
use Arr;
use Str;
use Auth;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function index(){
        $data['posts']=Post::orderBy('id','desc')->paginate(5);
        return view('backend.comments.index',$data);
    }

    public function show($id){
        $data['comments']=Comment::where('post_id', $id)->orderBy('id','desc')->paginate(10);
        $data['post']=Post::where('id', $id)->first();
        if($data['post'] == null ){
            return redirect()->back();
        }else{
            return view('backend.comments.showcomment',$data);
        }
    }


     public function store(CommentRequest $request){
        $data = Arr::except($request, ['_token'])->toarray();
        $data['is_active']=1;
        $data['user_id']=Auth::User()->id;
        Comment::create($data);
        return redirect()->back();
       
    }

    public function edit($id){
        $data['comment']=Comment::find($id);
        if($data['comment']== null){
            return redirect()->back();
        }else{
            return view('backend.comments.edit',$data);
        }
    }


    public function update(CommentRequest $request,$id){
       $data=Arr::except($request,['_token','_method'])->toArray();
       $comment=Comment::find($id);
       $comment->update($data);
       return redirect()->back()->with('thongbao','Sửa Thành Công');

    }



    public function destroy($id){
        Comment::destroy($id);
        return redirect()->back();
    }







}
