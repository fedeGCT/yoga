<div class="from-group"> 
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('program_id','Para que programa de entrenamiento:') !!}
    {!! Form::select('program_id', $programs, null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('description','Descripción:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('time','Tiempo:') !!}
    {!! Form::text('time', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('image','Imagen de categoría:') !!}
    {!! Form::file('image') !!}
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 175x50 px.
    </small>
</div>

<div class="from-group">
    {!! Form::label('videos','Videos:') !!}
    <div>
        @foreach ($videos as $video)
        <label>
            {!! Form::checkbox('videos[]', $video->id) !!} {{$video->name}}
        </label>
        @endforeach
    </div>
</div>

@section('scripts')
    <script src="{{asset('vendor/srtingToSlug/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#name, #slug"). stringToSlug({
                callback: function(text){
                    $("#slug").val(text);
                }
            });
        });
    </script>
@endsection                    