@extends('layouts.admin')
@section('title','Detalles de programa')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('programs.index')}}">Programas</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de programa</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
        <p><strong>Nombre: </strong>{{$program->name}} </p>
        <p><strong>Slug: </strong>{{$program->slug}} </p>
		<p><strong>Descripción: </strong>{{$program->description}} </p>
		<p><strong>Nivel: </strong>{{$program->level}} </p>
        <p><strong>Duración: </strong>{{$program->duration}} </p>
		<div class="from-group">
			<div class="text-center">
				<img src="{!! asset('imagenes/').'/'.$program->image !!}" 
			  </div>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('programs.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
  </div>
@endsection