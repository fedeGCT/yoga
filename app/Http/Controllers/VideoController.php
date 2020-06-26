<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $videos = Video::orderBy('id','DESC')->paginate();
        
        return view('admin.video.index', compact('videos'));
       
    }
    public function create()
    {
        return view('admin.video.create');
    }
    public function store(Request $request)
    {
        $file = $request->file('image1');
        $nombreimagen1 = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen1);

        $file = $request->file('image2');
        $nombreimagen2 = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen2);

        $video = new Video;
        $video->name = $request->name;
        $video->slug = $request->slug;
        $video->description = $request->description;
        $video->url = $request->url;
        $video->image1 = $nombreimagen1;
        $video->image2= $nombreimagen2;
        $video->save();

        return redirect()->route('videos.edit',$video->id)->with('info','Video creado con exito.');
    }
    public function show($id)
    {
        $video= Video::find($id);
        return view('admin.video.show', compact('video'));
    }
    public function edit($id)
    {
        $video= Video::find($id);
        return view('admin.video.edit', compact('video'));
    }
    public function update(Request $request, $id)
    {
        $file = $request->file('image1');
        $nombreimagen1 = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen1);

        $file = $request->file('image2');
        $nombreimagen2 = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen2);

        $video = Video::findOrFail($id);
        $video->name = $request->name;
        $video->slug = $request->slug;
        $video->description = $request->description;
        $video->url = $request->url;
        $video->image1 = $nombreimagen1;
        $video->image2= $nombreimagen2;
        $video->save();
        return redirect()->route('videos.edit',$video->id)->with('info','Video actualizado con exito.');
    }
    public function destroy($id)
    {
        $video = Video::find($id)->delete();
        return back()->with('info', 'Video eliminado correctamente');

    }
}
