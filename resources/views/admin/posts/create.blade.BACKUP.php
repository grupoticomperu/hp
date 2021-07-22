
@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crear Publicación </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.posts.index')}}">Posts</a></li>
                    <li class="breadcrumb-item active">Crear</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')

  
 <section class="content">
      <div class="container-fluid">
        <form method="POST" action="{{ route('admin.posts.store') }}">
          {{ csrf_field() }}
        <div class="row">
         
          <!-- left column -->
              <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Nuevo Post</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                    <div class="card-body">

                      <div class="form-group {{ $errors->has('title') ? 'text-danger' : '' }}">
                        <label for="exampleInputEmail1">Título de la Publicación</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el título de la Publicación">
                        {!! $errors->first('title','<span class="help-block">:message</span>') !!}
                      </div>

                      



                      <div class="form-group {{ $errors->has('body') ? 'text-danger' : '' }}">
                        <label for="exampleInputEmail1">Contenido de la Publicación</label>
                        <textarea rows="10" id="editor" name="body" class="form-control" placeholder="Ingrese contenido de la publicación"></textarea>
                        {!! $errors->first('body','<span class="help-block">:message</span>') !!}
                      </div>



                    </div>
                    <!-- /.card-body -->


                  
                </div>
                <!-- /.card -->

              </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-4">
                <!-- Form Element sizes -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Nuevo Post</h3>
                    </div>



                    <div class="card-body">

            
                        <div class="form-group">
                          <label for="categoria">categoria</label>
                          <select name="category" class="form-control select2" style="width: 100%;">
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>                            
                            @endforeach
                            
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Tags</label>
                          <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione una o más etiquetas"
                                  style="width: 100%;">
                            @foreach($tags as $tag)
                              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                           
                          </select>
                        </div>


                        <div class="form-group">
                          <label>Date:</label>

                          <div class="input-group date">
                            <div class="input-group-append" data-target="#datepicker" data-toggle="datepicker">
                                <div class="input-group-text">
                                  <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <input type="text" name="datepicker" class="form-control pull-right" id="datepicker">
                          </div>
                          <!-- /.input group -->
                        </div>
   
                        <div class="form-group">
                          <label for="excerpt">Resumen de la Publicación</label>
                          <textarea name="excerpt" class="form-control" placeholder="Ingrese resumen de la publicación"></textarea>

                        </div>


                    </div>



                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-block">Guardar el Post</button>
                    </div>



                  </div>    
                <!-- /.card -->

              </div>

         

        </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
<!--
  <div class="row">
    <div class="col-md-8">
           <div class="box">
              <div class="box-header">
                 <h3 class="box-title">Crear una Publicación</h3>

              </div>
            </div> 

            <form>
              <div class="box-body">
                  <div class="form-group">
                      <label>Título de la Publicación</label>
                      <input name="title" class="form-control" placeholder="Ingrese el título de la Publicación">
                  </div>
              </div>

            </form>    



    </div>
  </div>

-->

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
  
  
