<div class="row">
<div class="col-4 form-group">
    {!! Form::label('subcategoryhosting_id', 'Sub Categoria:') !!}
    {!! Form::select('subcategoryhosting_id', $subcategoryhosting, null, ['class' => 'form-control']) !!}
    @error('subcategoryhosting_id')
      <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="col-4 form-group">
    {!! Form::label('title', 'Título:') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Titulo del plan de Hosting']) !!}

    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="col-4 form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese slug ', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
</div>



<div class="row">


    <div class="col-4 form-group">
        {!! Form::label('storage', 'Espacio:') !!}
        {!! Form::text('storage', null, ['class'=>'form-control', 'placeholder'=>'Espacio']) !!}

        @error('storage')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>
    <div class="col-4 form-group">
        {!! Form::label('bandwidth', 'Ancho de Banda:') !!}
        {!! Form::text('bandwidth', null, ['class'=>'form-control', 'placeholder'=>'Ancho de Banda']) !!}

        @error('bandwidth')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>
    <div class="col-4 form-group">
        {!! Form::label('cpanel', 'Cpanel:') !!}
        {!! Form::text('cpanel', null, ['class'=>'form-control', 'placeholder'=>'Espacio']) !!}

        @error('cpanel')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

</div>

<div class="row">


    <div class="col-4 form-group">
        {!! Form::label('emails', 'Correos:') !!}
        {!! Form::text('emails', null, ['class'=>'form-control', 'placeholder'=>'Correos']) !!}

        @error('emails')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>
    <div class="col-4 form-group">
        {!! Form::label('bd', 'Base de datos:') !!}
        {!! Form::text('bd', null, ['class'=>'form-control', 'placeholder'=>'Base de datos']) !!}

        @error('bd')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>
    <div class="col-4 form-group">
        {!! Form::label('price', 'Precio:') !!}
        {!! Form::text('price', null, ['class'=>'form-control', 'placeholder'=>'Precio']) !!}

        @error('price')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

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
    {!! Form::label('shortdescription', 'Resumen') !!}
    {!! Form::textarea('shortdescription', null, ['class' => 'form-control', 'rows'=>3]) !!}
    @error('shortdescription')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-group">
    {!! Form::label('longdescription', 'Descripcion del Hosting') !!}
    {!! Form::textarea('longdescription', null, ['class' => 'form-control']) !!}
    @error('longdescription')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>


<div class="border mb-8 row p-2 mb-4" >
    <div class="col">
        <div class="image-wrapper">
            @isset($hosting->imagen)
                <img width="300px" id="picture" src="{{Storage::url($hosting->imagen)}}" alt="">
            @else
                <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
            @endif
          
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('imagen', 'Imagen que se va mostrar') !!}
            {!! Form::file('imagen', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
            
        @error('imagen')
        <span class="text-danger">{{$message}}</span>
        @enderror

        </div>

 
    </div>
</div>



<div class="border mb-8 row p-2 mb-4" >
    <div class="col">
        <div class="image-wrapper">
            @isset($hosting->imagen2)
                <img width="300px" id="picture" src="{{Storage::url($hosting->imagen2)}}" alt="">
            @else
                <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
            @endif
          
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('imagen2', 'Imagen para el baner superior') !!}
            {!! Form::file('imagen2', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
            
        @error('imagen2')
        <span class="text-danger">{{$message}}</span>
        @enderror

        </div>

 
    </div>
</div>