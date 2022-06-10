@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Preguntas Frecuentes </h1>
                <a href="{{ route('questions.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"> </i> Crear Nuevo</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">inicio</a></li>
                <li class="breadcrumb-item active">Preguntas Frecuentes ?</li>
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
            <table id="offer-table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>orden</th>
                <th>estado</th>
                <th>Acciones</th>
              </tr>
              </thead>

              <tbody>

                  @foreach ($questions as $question)
                      <tr>
                          <td>{{ $question->id }}</td>
                         
                          <td>{{ $question->title }}</td>
                          <td>{{ $question->description }}</td>
                    
                          <td>{{ $question->order }}</td>

                          <td>
                            @if ($question->state == 1)
  
                              <div class='btn btn-success btn-xs btnActivar' estadoCategoria='1' > Activo</div>
                            @else
                              <button class='btn btn-danger btn-xs btnActivar' estadoCategoria='0' > desactivo</button>
                            @endif   
                          
                                                                           
                          </td>
                         
                          <td>
                  
                            <a href="{{ route('questions.edit', $question)}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i></a> 
                            {{-- <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a> --}}
  
                            <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $question->id }}"
                                        class="btn btn-xs btn-danger"><i class="fas fa-times-circle"></i></button>

                        

                          </td>
                      </tr>
                                      
                  @endforeach

              </tbody>

              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>orden</th>
                    <th>estado</th>
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
     
        $('#offer-table').DataTable({
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



<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea borrar el registro seleccionado?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" method="POST" action="{{ route('offers.destroy',0) }}"
                    data-action="{{ route('offers.destroy',0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>


            </div>
        </div>
    </div>
</div>






@endpush
