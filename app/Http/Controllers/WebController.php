<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;
use App\Program;
use App\Video;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function program()
    {
        $programs = Program::orderBy('id','DESC')->paginate(9);
        return view('web.classes', compact('programs'));
    }

    public function routines($slug){
        $program = Program::where('slug', $slug)->pluck('id')->first();
        $routines= Routine::where('program_id', $program) ->orderBy('id','DESC')->paginate();
        return view('web.video', compact('routines'));
    }

    public function clase($slug){
        $videos = Video::whereHas('routines', function($query)use($slug){
        $query->where('slug', $slug);
        })->orderBy('id','DESC')->paginate();
        return view('web.videosingle', compact('videos'));
    }
    // public function programslug($slug)
    // {
    //     $program = Program::where('slug', $slug)->pluck('id')->first();
    //     $routines= Routine::where('program_id', $program) ->orderBy('id','DESC')->paginate();
    //     return view('class', compact('routines'));
    // }
    // public function videoslug($slug)
    // {
    //     $videos= Video::whereHas('videos', function($query)use($slug){
    //         $query->where('slug', $slug);
    //     })->orderBy('id','DESC')->paginate();

    //     return view('video',compact('videos'));
    // }
}
