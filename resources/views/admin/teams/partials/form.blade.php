<div class="row">

    <div class="col-3 form-group">
        {!! Form::label('name', 'Nombres:') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese nombre completo']) !!}
    
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror
    
    </div>



    <div class="col-3 form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese slug ', 'readonly']) !!}
        @error('slug')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>


    <div class="col-3 form-group">
        {!! Form::label('profesion', 'Profesión:') !!}
        {!! Form::text('profesion', null, ['class'=>'form-control', 'placeholder'=>'Ingrese tu Profesión']) !!}
    
        @error('profesion')
            <small class="text-danger">{{$message}}</small>
        @enderror
    
    </div>

    <div class="col-3 form-group">
        {!! Form::label('rol', 'Rol:') !!}
        {!! Form::text('rol', null, ['class'=>'form-control', 'placeholder'=>'Ingrese tu Rol']) !!}
    
        @error('rol')
            <small class="text-danger">{{$message}}</small>
        @enderror
    
    </div>

</div>
    
    
      
    <div class="form-group">
        {!! Form::label('shortdescription', 'Descripción Corta') !!}
        {!! Form::textarea('shortdescription', null, ['class' => 'form-control', 'rows'=>3]) !!}
        @error('shortdescription')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    
    <div class="form-group">
        {!! Form::label('longdescription', 'Descripcion Larga') !!}
        {!! Form::textarea('longdescription', null, ['class' => 'form-control']) !!}
        @error('longdescription')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    

        <div class="col-6 mb-8 row p-2 mb-4" >
            <div class="col">
                <div class="image-wrapper">
                    @isset($work->image)
                        <img width="300px" id="picture" src="{{Storage::url($work->image)}}" alt="">
                    @else
                        <img width="300px" id="picture" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                    @endif
                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('image', 'Imagen baner, parte superior') !!}
                    {!! Form::file('image', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}
                    
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
        
                </div>
        
        
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
        
        
        <div class="row">

            <div class="col-3 form-group">
                {!! Form::label('facebook', 'Facebook:') !!}
                {!! Form::text('facebook', null, ['class'=>'form-control', 'placeholder'=>'Ingrese facebook']) !!}
            
                @error('facebook')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            
            </div>
        
        
        
            <div class="col-3 form-group">
                {!! Form::label('youtube', 'youtube:') !!}
                {!! Form::text('youtube', null, ['class'=>'form-control', 'placeholder'=>'Ingrese youtube ']) !!}
                @error('youtube')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        
        
            <div class="col-3 form-group">
                {!! Form::label('twitter', 'twitter:') !!}
                {!! Form::text('twitter', null, ['class'=>'form-control', 'placeholder'=>'Ingrese twitter']) !!}
            
                @error('twitter')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            
            </div>
        
            <div class="col-3 form-group">
                {!! Form::label('instagram', 'instagram:') !!}
                {!! Form::text('instagram', null, ['class'=>'form-control', 'placeholder'=>'Ingrese tu instagram']) !!}
            
                @error('instagram')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            
            </div>
        
        </div>


