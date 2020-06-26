@extends('layouts.web')
@section('content')
    



<div class="slide-one-item home-slider owl-carousel">
      
  <div class="site-blocks-cover overlay" style="background-image: url(yogalife/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h2 class="caption mb-2">Yoga para todos</h2>
          <h1 class="">Bienvenido a yogalife</h1>
          
        </div>
      </div>
    </div>
  </div>  

  <div class="site-blocks-cover overlay" style="background-image: url(yogalife/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h2 class="caption mb-2">Disfruta con nosotros</h2>
          <h1 class="">Yoga &amp; Meditacion</h1>
        </div>
      </div>
    </div>
  </div> 
</div>

<div class="site-block-half d-flex">
  <div class="image bg-image" style="background-image: url('yogalife/images/img_1.jpg');"></div>
  <div class="text">
    <h2 class="font-family-serif">Bienvenido a yogalife</h2>
    <span class="caption d-block text-primary pl-0 mb-4">¡Hola a todos!</span>
    <p class="mb-5">El kriyá yoga fue popularizado en Occidente por Paramahansa Yogananda en su libro Autobiografía de un kriiá acelera la evolución espiritual y genera un profundo estado de la tranquilidad.</p>
    <p><a href="{{route('program.web')}}" class="btn btn-primary pill px-4 py-3 text-white">Programas de entrenamiento</a></p>

  </div>
</div>



@endsection