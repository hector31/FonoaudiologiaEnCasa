<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class GaleryController extends Controller
{
    public function index(){
        $galery_posts=Galery::all(); //para todos los posts
        return view('admin.galery.index',['galery_posts'=>$galery_posts]);
    }
    
    public function create(){
        // $this->authorize('create',Galery::class);
        return view('admin.galery.create');
    }
    
    public function store(){
        // $this->authorize('create',Galery::class);
        $inputs =request()->validate([
            'title'=>'required|min:4|max:255',
            'image_galery'=>'file'
        ]);
        if(request('image_galery')){
            $inputs['image_galery']=request('image_galery')->store('images_galery');
        }
        
        // auth()->user()->posts()->create($inputs);
        $galery_post = Galery::create($inputs);
        // session()->flash('post-created-message','Post with title was created '. $inputs['post_image']);//session se puede utiliza como un metodo estatico no se necesita llamarlo
        // Session::flash('project-created-message','El post del proyecto con titulo '.$inputs['title'].' fue creado');
        session()->flash('galery-post-created-message','Se ñadio nueva imagen a galeria con titulo '.$inputs['title']);

        return redirect()->route('galery.index');
    }

    public function destroy(Galery $galery_post){
        // $this->authorize('delete',$galery_post);
        $image1_path=str_replace("http://127.0.0.1:8000",public_path(),$galery_post->image_galery);
        $image1_path=str_replace("\\",'/',$image1_path);
        File::delete($image1_path);
        Session::flash('message','La imagen fue eliminada de galeria'.$image1_path);
        $galery_post->delete();
        return back();
    }

}
