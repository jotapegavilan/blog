<x-app-layout>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la publicación']) !!}
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>     
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug de la publicación']) !!}
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>    
                <div class="form-group">
                    {!! Form::label('extract', 'Extracto') !!}
                    {!! Form::text('extract', null, ['class'=>'form-control','placeholder'=>'Ingrese un estracto de la publicación']) !!}
                    @error('extract')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 
                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo') !!}
                    {!! Form::text('body', null, ['class'=>'form-control','placeholder'=>'Ingrese la publicación']) !!}
                    @error('body')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 
                         
                {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
    </script>
</x-app-layout>


