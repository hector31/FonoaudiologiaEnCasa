<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index(){
        if(auth()->user()->userHasRole('super admin'))
        $posts=Post::orderBy('created_at','DESC')->get(); //para todos los posts
        else
        $posts=auth()->user()->posts;
        return view('admin.posts.index',['posts'=>$posts]);
    }
    public function show(Post $post){
        return view('admin.posts.blog-post',['post'=>$post]);
    }
    public function create(){
        $this->authorize('create',Post::class);
        return view('admin.posts.create');
    }
    public function store(){
         // dd($inputs);
        $this->authorize('create',Post::class);
        $inputs =request()->validate([
            'title'=>'required|min:4|max:255',
            'post_image'=>'file',
            'post_second_image'=>'file',
            'post_third_image'=>'file',
            'body'=>'required',
            'description'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images_posts');
        
        }
        if(request('post_second_image')){
            $inputs['post_second_image']=request('post_second_image')->store('images_posts');
        }
        if(request('post_third_image')){
            $inputs['post_third_image']=request('post_third_image')->store('images_posts');
        }

        
        auth()->user()->posts()->create($inputs);
        // session()->flash('post-created-message','Post with title was created '. $inputs['post_image']);//session se puede utiliza como un metodo estatico no se necesita llamarlo
        // Session::flash('project-created-message','El post del proyecto con titulo '.$inputs['title'].' fue creado');
        session()->flash('post-created-message','El post con titulo '.$inputs['title'].' fue creado');

        return redirect()->route('posts.index');
    }

    public function edit(Post $post){
        $this->authorize('view',$post);
        return view('admin.posts.edit',['post'=>$post]);
    }

    public function destroy(Post $post){
        $this->authorize('delete',$post);
        $image1_path=str_replace("http://127.0.0.1:8000",public_path(),$post->post_image);
        $image1_path=str_replace("\\",'/',$image1_path);
        File::delete($image1_path);
        $image2_path=str_replace("http://127.0.0.1:8000",public_path(),$post->post_second_image);
        $image2_path=str_replace("\\",'/',$image1_path);
        File::delete($image2_path);
        $image3_path=str_replace("http://127.0.0.1:8000",public_path(),$post->post_third_image);
        $image3_path=str_replace("\\",'/',$image1_path);
        File::delete($image3_path);
        Session::flash('message','El post fue eliminado '.$image1_path);
        $post->delete();
        return back();
    }


    public function update(Post $post){
        $inputs=request()->validate([
            'title'=>'required|min:8|max:255',
            // 'post_image'=>'mimems:jpeg,bmp,png',//si se quiere solo cierto tipo de documentos a subir
            'post_image'=>'file',//admite todos los documentos pdf imagenes etc
            'post_second_image'=>'file',
            'post_third_image'=>'file',
            'body'=>'required',
            'description'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');
            $post->post_image=$inputs['post_image'];
        }
        if(request('post_second_image')){
            $inputs['post_second_image']=request('post_second_image')->store('images');
            $post->post_second_image=$inputs['post_second_image'];
        }
        if(request('post_third_image')){
            $inputs['post_third_image']=request('post_third_image')->store('images');
            $post->post_third_image=$inputs['post_third_image'];
        }
        $post->title=$inputs['title'];
        $post->body=$inputs['body'];
        $post->description=$inputs['description'];

        $this->authorize('update',$post);
   
        $post->update();
        session()->flash('post-updated-message','El proyecto fue actualizado '. $inputs['title']);//session se puede utiliza como un metodo estatico no se necesita llamarlo

        return redirect()->route('posts.index');
    }

}
