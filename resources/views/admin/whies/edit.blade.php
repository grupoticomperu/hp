@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modificar contenido de: Porque Elegirnos ? </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('offers.index')}}">Porque Elegirnos</a></li>
                    <li class="breadcrumb-item active">Modificar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')

  
 <section class="content">
      <div class="container-fluid">

        {!! Form::model($why, ['route'=>['whies.update', $why], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}  

          <div class="row">
         
          <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="card-header">
                      <h3 class="card-title">Modificando: Porque Elegirnos</h3>
                    </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                    <div class="card-body">

                        @include('admin.whies.partials.form')

                
                    </div>
                    <!-- /.card-body -->
                 
                    {!! Form::submit('Modificar', ['class'=>'btn btn-primary']) !!}

                </div>
                <!-- /.card -->



              </div>
              <!--/.col (left) -->
              <!-- right column -->
       
           </div>



        {!! Form::close() !!}
        <!-- /.row -->
      </div><!-- /.container-fluid -->
 </section>

@stop




  
  
