
  <div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::text('image', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la imagén']) !!}

    @error('image')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>

  <div class="form-group">
    {!! Form::label('title', 'Título de la Oferta:') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título de la oferta']) !!}

    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>

  <div class="form-group">
    {!! Form::label('description', 'Descripción de la Oferta:') !!}
    {!! Form::text('description', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Descripción de la oferta']) !!}

    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>


  <div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el url de la oferta']) !!}

    @error('url')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>



  <div class="form-group">
    {!! Form::label('texto', 'Texto del boton:') !!}
    {!! Form::text('texto', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el texto del boton']) !!}

    @error('texto')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>



  <div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label for="">
      Activado {!! Form::radio('state', 1, true) !!}
    </label>
    <label for="">
        Desactivado{!! Form::radio('state', 0) !!}
    </label>

    @error('state')
    <small class="text-danger">{{$message}}</small>
    @enderror
  </div>