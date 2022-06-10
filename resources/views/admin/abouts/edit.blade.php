@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modificar el contenido de Nosotros </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item active">Modificar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')

  
 <section class="content">
      <div class="container-fluid">


        {!! Form::model($about, ['route'=>['abouts.update', $about], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}    

        <div class="row">
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificando contenido de la Empresa</h3>
              </div>

              <div class="card-body">  

                <div class="form-group">
                  {!! Form::label('title', 'Título:') !!}
                  {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título']) !!}
              
                  @error('title')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('our', 'Nosotros') !!}
                  {!! Form::textarea('our', null, ['class' => 'form-control']) !!}
                  @error('our')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
            


             
                <div class="mb-12 row">
                    <div class="col-md-6">
                        <div class="image-wrapper">
                            @isset($about->imagen1)
                                <img width="200px" id="imagen1" src="{{Storage::url($about->imagen1)}}" alt="TICOM Diseño de Páginas Web">
                            @else
                                <img width="200px" id="imagen1" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                            @endif
                          
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('imagen1', 'imagen de tu empresa') !!}
                            {!! Form::file('imagen1', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                            
                        @error('imagen1')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                
                        </div>
                
                        <p>Escoja tu imagen</p>
                    </div>

                </div>


                <div class="mb-12 row mt-2">
                  <div class="col-md-6">
                      <div class="image-wrapper">
                          @isset($about->imagen2)
                              <img width="200px" id="imagen2" src="{{Storage::url($about->imagen2)}}" alt="TICOM Diseño de Páginas Web">
                          @else
                              <img width="200px" id="imagen2" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                          @endif
                        
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('imagen2', 'imagen de tu empresa') !!}
                          {!! Form::file('imagen2', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                          
                      @error('imagen2')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
              
                      </div>
              
                      <p>Escoja tu imagen</p>
                  </div>

              </div>




              
              </div>



            
            </div>
          </div> 
          
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificando contenido de la Empresa</h3>
              </div>
              <div class="card-body">  

                  <div class="form-group">
                    {!! Form::label('mission', 'Misión') !!}
                    {!! Form::textarea('mission', null, ['class' => 'form-control', 'rows'=> 3]) !!}
                    @error('mission')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>



                  <div class="form-group">
                    {!! Form::label('vission', 'Visión') !!}
                    {!! Form::textarea('vission', null, ['class' => 'form-control']) !!}
                    @error('vission')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    {!! Form::label('description', 'Description Google') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=> 3]) !!}
                    @error('description')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    {!! Form::label('keywords', 'Plabras claves') !!}
                    {!! Form::textarea('keywords', null, ['class' => 'form-control', 'rows'=> 3]) !!}
                    @error('keywords')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>

 
              </div>    
            </div>  


          </div>
        </div>   
         

        <div class="card-footer">
              
          {!! Form::submit('Actualizar', ['class'=>'btn btn-primary btn-block']) !!}

        </div>


        {!! Form::close() !!}


        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
 </section>

@stop

@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
@endpush

@push('scripts')
  
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script src="/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

<script>
    //Timepicker
   // $('#timepicker').datetimepicker({
   //   format: 'LT'
   // })

    $('#datepicker').datepicker({
      autoclose: true
    })
</script>


<script>


    CKEDITOR.replace('our')
    CKEDITOR.replace('mission')
    CKEDITOR.replace('vission')
    //bootstrap WYSIHTML5 - text editor
    $('.select2').select2()
</script>

@endpush
  
  
