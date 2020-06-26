@extends('layouts.admin')
@section('title','Detalles de video')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('videos.index')}}">Video</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de videos</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
        <p><strong>Nombre: </strong>{{$video->name}} </p>
        <p><strong>Slug: </strong>{{$video->slug}} </p>
		<p><strong>Descripción: </strong>{{$video->description}} </p>
		<p><strong>Enlace: </strong>{{$video->url}} </p>
		<div class="from-group">
			<div class="text-center">
				<img src="{!! asset('imagenes/').'/'.$video->image1 !!}"/>
			</div>
		</div>
		<div class="from-group">
			<div class="text-center">
				<img src="{!! asset('imagenes/').'/'.$video->image2 !!}"/>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('videos.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
</div>
@endsection