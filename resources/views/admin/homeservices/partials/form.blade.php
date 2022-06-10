  
  <div class="mb-8 row">
    <div class="col-md-6">
        <div class="image-wrapper">
            @isset($homeservice->image)
                <img width="500px" id="picture" src="{{Storage::url($homeservice->image)}}" alt="">
            @else
                <img id="picture" src="/storage/homeservices/default.jpg" alt="">
            @endif
          
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
            
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        </div>

        <p>seleccione tu imagen </p>
    </div>

    

</div>
  
  

  <div class="form-group">
    {!! Form::label('title', 'Título del Servicio de Home:') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título del servicio']) !!}

    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>


    <div class="form-group">
      {!! Form::label('description', 'Descripción') !!}
      {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('ubication', 'ubicación:') !!}
    {!! Form::text('ubication', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la ubicacion de la imagen izquierda o derecha']) !!}

    @error('ubication')
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