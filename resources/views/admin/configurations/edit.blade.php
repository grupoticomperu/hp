@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modificar Configuraciones </h1>
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


        {!! Form::model($configuration, ['route'=>['configurations.update', $configuration], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}    

        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificando configuration</h3>
              </div>
              <div class="card-body">  

                <div class="form-group">
                  {!! Form::label('telephono', 'Teléfono:') !!}
                  {!! Form::text('telephono', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título de tu Empresa']) !!}
              
                  @error('telephono')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>

                <div class="form-group">
                  {!! Form::label('movil', 'Celular:') !!}
                  {!! Form::text('movil', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Celular de tu Empresa']) !!}
              
                  @error('movil')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>

                <div class="form-group">
                  {!! Form::label('facebook', 'Facebook:') !!}
                  {!! Form::text('facebook', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el facebook de tu Empresa']) !!}
              
                  @error('facebook')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('youtube', 'Youtube:') !!}
                  {!! Form::text('youtube', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Youtube de tu Empresa']) !!}
              
                  @error('youtube')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('instagram', 'Instagram:') !!}
                  {!! Form::text('instagram', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Instagram de tu Empresa']) !!}
              
                  @error('instagram')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el email de tu Empresa']) !!}
                
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                  </div>

                  <div class="form-group">
                    {!! Form::label('address', 'Dirección:') !!}
                    {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Dirección de tu Empresa']) !!}
                
                    @error('address')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                  </div>

                  <div class="form-group">
                    {!! Form::label('description', 'Descripción del Pie:') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la descripción de tu Empresa', 'rows'=>'4']) !!}
                
                    @error('description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                  </div>


              
                <div class="mb-12 row">
                    <div class="col-md-6">
                        <div class="image-wrapper">
                            @isset($configuration->logo)
                                <img width="200px" id="logo" src="{{Storage::disk("s3")->url($configuration->logo)}}" alt="TICOM Diseño de Páginas Web">
                            @else
                                <img width="200px" id="logo" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                            @endif
                          
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('logo', 'Logo de tu empresa') !!}
                            {!! Form::file('logo', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                            
                        @error('logo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                
                        </div>
                
                        <p>Escoja tu logo</p>
                    </div>

                </div>



                <div class="mb-12 row ">
                    <div class="col-md-6 ">
                        <div class="image-wrapper">
                            @isset($configuration->icon)
                                <img width="60px" id="icon" src="{{Storage::disk("s3")->url($configuration->icon)}}" alt="TICOM Diseño de Páginas Web">
                            @else
                                <img width="60px" id="icon" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                            @endif
                          
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('icon', 'icono de tu empresa') !!}
                            {!! Form::file('icon', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                            
                        @error('icon')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                
                        </div>
                
                        <p>Escoja tu icono</p>
                    </div>

                </div>



                <div class="form-group">
                  {!! Form::label('metatitle', 'Título Google:') !!}
                  {!! Form::text('metatitle', null, ['class'=>'form-control', 'placeholder'=>'Ingrese titulo para google']) !!}
              
                  @error('metatitle')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('metadescription', 'Description Google') !!}
                  {!! Form::textarea('metadescription', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la descripción de tu Empresa', 'rows'=>'3']) !!}
              
                  @error('metadescription')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('keywords', 'Keywords Google') !!}
                  {!! Form::textarea('keywords', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la descripción de tu Empresa', 'rows'=>'3']) !!}
              
                  @error('keywords')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>





              
              </div>


                <div class="card-footer">
              
                  {!! Form::submit('Actualizar configuration', ['class'=>'btn btn-primary btn-block']) !!}

                </div>
            
            </div>
          </div>      
        </div>   
         

      {!! Form::close() !!}


        <!-- /.row -->
      </div><!-- /.container-fluid -->
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

    CKEDITOR.replace('editor')
    //bootstrap WYSIHTML5 - text editor
    $('.select2').select2()
</script>

@endpush
  
  
