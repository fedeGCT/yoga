<?php

namespace App\Http\Controllers;

use App\Routine;
use App\Program;
use App\Video;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $routines = Routine::orderBy('id','DESC')->paginate(20);
        return view('admin.routine.index', compact ('routines'));
    }
    public function create()
    {
        $programs = Program::orderBy('name','ASC')->pluck('name','id');
        $videos = Video::orderBy('name','ASC')->get();
        return view('admin.routine.create', compact('programs','videos'));
    }
    public function store(Request $request)
    {
         $file = $request->file('image');
         $nombreimagen = time().'_'.$file->getClientOriginalName();
         $file->move(public_path("/imagenes"),$nombreimagen);

        $routine = new Routine;
        $routine->program_id = $request->program_id;
        $routine->name = $request->name;
        $routine->slug = $request->slug;
        $routine->description = $request->description;
        $routine->time = $request->time;
        $routine->image = $nombreimagen;
        $routine->save();
        $routine->videos()->attach($request->get('videos'));
        return redirect()->route('routines.edit',$routine->id)->with('info','Clase creada con exito.');
    }
    public function show($id)
    {
        $routine = Routine::with('program','videos')->where('id',$id)->firstOrFail();
        return view('admin.routine.show', compact('routine'));
    }
    public function edit($id)
    {
        $programs = Program::orderBy('name','ASC')->pluck('name','id');
        $videos = Video::orderBy('name','ASC')->get();
        $routine = Routine::where('id',$id)->firstOrFail();
        return view('admin.routine.edit', compact('routine','programs','videos'));
    }
    public function update(Request $request, $id)
    {
        $file = $request->file('image');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $routine = Routine::findOrFail($id);
        $routine->category_id = $request->category_id;
        $routine->name = $request->name;
        $routine->slug = $request->slug;
        $routine->description = $request->description;
        $routine->time = $request->time;
        $routine->image = $nombreimagen;
        $routine->save();
        $routine->videos()->sync($request->get('videos'));
        return redirect()->route('routines.edit',$routine->id)->with('info','Clase actualizada con exito.');
    }
    public function destroy($id)
    {
        $routine = Routine::find($id)->delete();
        return back()->with('info', 'Clase eliminada con exito');
    }
}
