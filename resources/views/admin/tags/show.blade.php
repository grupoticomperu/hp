
@extends('admin.layout')
@section('header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ver Tag </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tag.index')}}">Tags</a></li>
                <li class="breadcrumb-item active">Ver</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop

@section('content')


<section class="content">
  <div class="container-fluid">

    <div class="row">
     
      <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ver Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">

                  <div class="form-group {{ $errors->has('name') ? 'text-danger' : '' }}">
                    <label for="name">Tag</label>
                    <p>{{ $tag->name }} </p>
                   
                  </div>

                  

                </div>
                <!-- /.card-body -->


              
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->
          <!-- right column -->


     

    </div>

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
