@extends('layouts.admin')
@section('title','Editar video')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('videos.index')}}">Videos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de video</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
    {!! Form::model($video, ['route'=>['videos.update',$video->id],'method'=>'PUT','files' => true]) !!}
	<div class="card-body ">
		@include('admin.video.form.form')
		<div class="from-group">
			<div class="text-center">
				<img src="{!! asset('imagenes/').'/'.$video->image1 !!}" class="rounded" alt="" width="250">
			  </div>
		</div>
		<div class="from-group">
			<div class="text-center">
				<img src="{!! asset('imagenes/').'/'.$video->image2 !!}" class="rounded" alt="" width="250">
			  </div>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('videos.index')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
	<!-- /.card-footer-->
  </div>
@endsection