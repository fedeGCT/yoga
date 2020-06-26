@extends('layouts.web')
@section('content')
<div class="site-section block-15">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2>Rutinas de ejercicio</h2>
      </div>
    </div>


    <div class="nonloop-block-15 owl-carousel">
      
        @foreach ($routines as $routine)
        <div class="media-with-text p-md-5">
          <div class="img-border-sm mb-4">
            <a href="{{route('clase.single', $routine->slug)}}" >
              <img src="{!! asset('imagenes/').'/'.$routine->image !!}" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="{{route('clase.single', $routine->slug)}}">{{$routine->name}}</a></h2>
          <span class="mb-3 d-block post-date">Fecha <a href="{{route('clase.single', $routine->slug)}}">Entrenador</a></span>
          <p>{{$routine->description}}</p>
        </div>
        @endforeach

    </div>

  </div>
</div>
@endsection
