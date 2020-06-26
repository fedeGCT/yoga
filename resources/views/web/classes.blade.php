@extends('layouts.web')
@section('content')
<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5">Programas de entrenamiento</h2>
      </div>
    </div>
    <div class="row">

      @foreach ($programs as $program)
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="program">
          <a href="{{route('routines.web',$program->slug)}}" class="d-block mb-0 thumbnail"><img src="{!! asset('imagenes/').'/'.$program->image !!}" alt="Image" class="img-fluid"></a>
          <div class="program-body">
            <h3 class="heading mb-2"><a href="{{route('routines.web',$program->slug)}}">{{$program->name}}</a></h3>
            <p>{{$program->description}}</p>
            <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> {{$program->duration}}</span> <span> <span class="icon-signal icon"></span> {{$program->level}}</span></div>
          </div>
        </div>
      </div>
      @endforeach
  
    </div>
  </div>
</div>
@endsection
