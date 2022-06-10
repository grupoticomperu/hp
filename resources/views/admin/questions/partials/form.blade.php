



  <div class="form-group">
    {!! Form::label('title', 'Pregunta:') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Pregunta']) !!}

    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>

  <div class="form-group">
    {!! Form::label('description', 'Respuesta:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Respuesta']) !!}

    @error('description')
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



  <div class="form-group">
    {!! Form::label('order', 'Orden:') !!}
    {!! Form::number('order', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el orden']) !!}

    @error('order')
        <small class="text-danger">{{$message}}</small>
    @enderror

  </div>


  <div class="form-group">
    <p class="font-weight-bold">Clasificación</p>
    <label for="">
      Hosting {!! Form::radio('clasification', 1, true) !!}
    </label>
    <label for="">
       Web{!! Form::radio('clasification', 2) !!}
    </label>

    @error('clasification')
    <small class="text-danger">{{$message}}</small>
    @enderror
  </div>