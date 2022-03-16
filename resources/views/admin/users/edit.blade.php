@extends('admin.layout')

@section('content')

	<div class="row">
		<div class="col-md-6">

			<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div >

                	 <h3 class="profile-username text-center">Editando Usuario</h3>

                	 @if($errors->any())
                	 	<ul class="list-group">
                	 		@foreach($errors->all() as $error)
	                	 		<li class="list-group-item list-group-item-danger">
	                	 			{{ $error }}
	                	 		</li>

                	 		@endforeach

                	 	</ul>
                	 @endif

                	 <form method="POST" action="{{ route('admin.users.update', $user) }}">

                	 	{{ csrf_field() }}
                	 	{{ method_field('PUT')}}
                	 	<div class="form-group">
                	 		<label for="name">Nombre:</label>
                	 		<input type="" name="name" value="{{ old('name', $user->name) }}" class="form-control">
                	 		
                	 	</div>


                	 	<div class="form-group">
                	 		<label for="name">Email:</label>
                	 		<input type="" name="email" value="{{ old('email', $user->email) }}" class="form-control">
                	 		
                	 	</div>


                	 	<button class="btn btn-primary btn-block">Actualizar usuario</button>
                	 </form>




                </div>
              </div>
            </div>  


			
		</div>
	</div>


@endsection