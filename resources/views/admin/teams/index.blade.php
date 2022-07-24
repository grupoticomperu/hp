@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Equipo </h1>
                <a class="btn btn-primary pull-right" href="{{route('teams.create')}}"><i class="fa fa-plus"> </i> Nuevo Equipo</a>
             
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">inicio</a></li>
                <li class="breadcrumb-item active">equipo</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection


    @section('content')
        
      <div class="card">
          <div class="card-header">
           
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Profesións</th>
                <th>image</th>
                <th>descripcion corta</th>
                <th>descripcion larga</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
              </thead>

              <tbody>

                  @foreach ($teams as $team)
                      <tr> 
                          <td>{{ $team->id }}</td>
                          <td>{{ $team->name }}</td>
                          <td>{{ $team->profesion }}</td>
                          <td><img width="50px"src="{{ Storage::disk("s3")->url($team->image) }}" alt=""></td>
                          <td>{!! $team->shortdescription !!}</td>
                          <td>{!! $team->longdescription !!}</td>
                          <td>

                          @if ($team->state == 1)
  
                            <div class='btn btn-success btn-xs btnActivar'  > Activo</div>
                          @else
                            <button class='btn btn-danger btn-xs btnActivar' > desactivo</button>
                          @endif 

                          </td>
                          <td>
                              
                               <a href="{{ route('teams.edit', $team)}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i></a> 
                              <a href="" class="btn btn-xs btn-danger"><i class="fas fa-times-circle"></i></a>

                          </td>
                      </tr>
                                      
                  @endforeach

              </tbody>

              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Profesións</th>
                    <th>image</th>
                    <th>descripcion corta</th>
                    <th>descripcion larga</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

    @endsection

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(function () {
     
        $('#posts-table').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>


   
@endpush
