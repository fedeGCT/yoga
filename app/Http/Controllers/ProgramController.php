<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $programs = Program::orderBy('id','DESC')->paginate(20);
        return view('admin.program.index', compact ('programs'));
    }
    public function create()
    {
        return view('admin.program.create');
    }
    public function store(Request $request)
    {
        $file = $request->file('imagen');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $program = new Program;
        $program->name = $request->name;
        $program->slug = $request->slug;
        $program->description = $request->description;
        $program->level = $request->level;
        $program->duration = $request->duration;
        $program->image = $nombreimagen;
        $program->save();
        return redirect()->route('programs.edit',$program->id)->with('info','Programa creado con exito.');
    }
    public function show($id)
    {
        $program = Program::where('id',$id)->firstOrFail();
        return view('admin.program.show', compact('program'));
    }
    public function edit($id)
    {
        $program = Program::where('id',$id)->firstOrFail();
        return view('admin.program.edit', compact('program'));
    }
    public function update(Request $request, $id)
    {
        $file = $request->file('imagen');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $program = Program::findOrFail($id);
        $program->name = $request->name;
        $program->slug = $request->slug;
        $program->description = $request->description;
        $program->level = $request->level;
        $program->duration = $request->duration;
        $program->image = $nombreimagen;
        $program->save();

        return redirect()->route('programs.edit',$program->id)->with('info','Programa actualizado con exito.');
    }
    public function destroy($id)
    {
        $program = Program::find($id)->delete();
        return back()->with('info', 'Programa eliminado con exito');
    }
}
