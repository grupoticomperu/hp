<div class="row">
    <div class="col-4 form-group">
        {!! Form::label('subcategoryservice_id', 'Sub Categoria:') !!}
        {!! Form::select('subcategoryservice_id', $subcategoryservice, null, ['class' => 'form-control']) !!}
        @error('subcategoryservice_id')
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
            {!! Form::label('titlemarket', 'titulo de marketing:') !!}
            {!! Form::text('titlemarket', null, ['class'=>'form-control', 'placeholder'=>'titulo de marketing']) !!}
    
            @error('titlemarket')
                <small class="text-danger">{{$message}}</small>
            @enderror
    
        </div>

        <div class="col-4 form-group">
            {!! Form::label('descriptionmarket', 'Descripcion del marketing:') !!}
            {!! Form::text('descriptionmarket', null, ['class'=>'form-control', 'placeholder'=>'Descripcion del marketing:']) !!}
    
            @error('descriptionmarket')
                <small class="text-danger">{{$message}}</small>
            @enderror
    
        </div>
        <div class="col-4 form-group">
            {!! Form::label('urlmarket', 'URL:') !!}
            {!! Form::text('urlmarket', null, ['class'=>'form-control', 'placeholder'=>'URL']) !!}
    
            @error('urlmarket')
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
    
    <div class="row">
        <div class="col-6 mb-8 row p-2 mb-4" >
            <div class="col">
                <div class="image-wrapper">
                    @isset($service->imagen1)
                        <img width="300px" id="picture" src="{{Storage::url($service->imagen1)}}" alt="">
                    @else
                        <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                    @endif
                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('imagen1', 'Imagen baner, parte superior') !!}
                    {!! Form::file('imagen1', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
                    
                @error('imagen1')
                <span class="text-danger">{{$message}}</span>
                @enderror
        
                </div>
        
        
            </div>
        </div>
        
        
        
        <div class="col-6 mb-8 row p-2 mb-4" >
            <div class="col">
                <div class="image-wrapper">
                    @isset($service->imagen2)
                        <img width="300px" id="picture" src="{{Storage::url($service->imagen2)}}" alt="">
                    @else
                        <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                    @endif
                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('imagen2', 'imagen de short description') !!}
                    {!! Form::file('imagen2', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
                    
                @error('imagen2')
                <span class="text-danger">{{$message}}</span>
                @enderror
        
                </div>
        
        
            </div>
        </div>
    </div>


    <div class="row">  
        <div class="col-6 mb-8 row p-2 mb-4" >
            <div class="col">
                <div class="image-wrapper">
                    @isset($service->imagen3)
                        <img width="300px" id="picture" src="{{Storage::url($service->imagen3)}}" alt="">
                    @else
                        <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                    @endif
                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('imagen3', 'Imagen de long description') !!}
                    {!! Form::file('imagen3', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
                    
                @error('imagen3')
                <span class="text-danger">{{$message}}</span>
                @enderror
        
                </div>
        
        
            </div>
        </div>


        <div class="col-6 mb-8 row p-2 mb-4" >
            <div class="col">
                <div class="image-wrapper">
                    @isset($service->imagen4)
                        <img width="300px" id="picture" src="{{Storage::url($service->imagen4)}}" alt="">
                    @else
                        <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                    @endif
                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('imagen4', 'Imagen de fondo del Marketing') !!}
                    {!! Form::file('imagen4', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
                    
                @error('imagen4')
                <span class="text-danger">{{$message}}</span>
                @enderror
        
                </div>
        
        
            </div>
        </div>
    </div>