@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modificar Slider </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('sliders.index')}}">Sliders</a></li>
                    <li class="breadcrumb-item active">Modificar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')

  
 <section class="content">
      <div class="container-fluid">


        {!! Form::model($slider, ['route'=>['sliders.update', $slider], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

          {!! Form::hidden('user_id', auth()->user()->id) !!}    

        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificando Slider</h3>
              </div>
              <div class="card-body">  

                <div class="form-group">
                  {!! Form::label('title1', 'Título:') !!}
                  {!! Form::text('title1', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título del slider']) !!}
              
                  @error('title1')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>

                <div class="form-group">
                  {!! Form::label('title2', 'Título:') !!}
                  {!! Form::text('title2', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título2 del slider']) !!}
              
                  @error('title2')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>

                <div class="form-group">
                  {!! Form::label('title3', 'Título:') !!}
                  {!! Form::text('title3', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título3 del slider']) !!}
              
                  @error('title3')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('title4', 'Título4:') !!}
                  {!! Form::text('title4', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título4 del slider']) !!}
              
                  @error('title4')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              
                </div>


                <div class="form-group">
                  {!! Form::label('url', 'Url:') !!}
                  {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el url del slider']) !!}
              
                  @error('url')
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


              
                <div class="mb-12 row">
                    <div class="col-md-6">
                        <div class="image-wrapper">
                            @isset($slider->image)
                                <img width="400px" id="image" src="{{Storage::url($slider->image)}}" alt="">
                            @else
                                <img id="image" src="https://cdn.pixabay.com/photo/2021/11/13/18/02/lake-6791971_960_720.jpg" alt="">
                            @endif
                          
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('image', 'Imagen que se va mostrar') !!}
                            {!! Form::file('image', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                            
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                
                        </div>
                
                        <p>Escoja tu imagen</p>
                    </div>

                </div>
              
              </div>


                <div class="card-footer">
              
                  {!! Form::submit('Actualizar Slider', ['class'=>'btn btn-primary btn-block']) !!}

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
  
  
