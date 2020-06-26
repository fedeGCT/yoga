@extends('layouts.web')
@section('content')
<div class="site-section">
    <div class="container">
      <div class="row align-items-center">

        @foreach ($videos as $video)
        <div class="col-md-6 mb-5 mb-md-0">
                  
          <div class="img-border">
            <a href="{{$video->url}}" class="popup-vimeo image-play">
              <span class="icon-wrap">
                <span class="icon icon-play"></span>
              </span>
              <img src="{!! asset('imagenes/').'/'.$video->image1 !!}" alt="" class="img-fluid rounded">
            </a>
          </div>

          <img src="{!! asset('imagenes/').'/'.$video->image2 !!}" alt="Image" class="img-fluid image-absolute">

        </div>
        <div class="col-md-5 ml-auto">


        <div class="section-heading text-left">
          <h2 class="mb-5">Ver video</h2>
        </div>
        <p class="mb-4">{{$video->description}}</p>
        <p><a href="{{$video->url}}" class="popup-vimeo text-uppercase">Ver video <span class="icon-arrow-right small"></span></a></p>
        </div>

        <div class="h-25" >

        </div>

        @endforeach

       
      </div>
    </div>
  </div>
@endsection