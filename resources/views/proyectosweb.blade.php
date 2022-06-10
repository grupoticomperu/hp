@extends('layout')




@section('contenido')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" >
          <div class="container">
            <h2 class="breadcrumbs-custom__title">Proyectos Realizados</h2>
          </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li class="active">Proyectos Realizados</li>
            </ul>
          </div>
        </div>
      </section>



      <section class="section-lg bg-default text-center">
        <div class="container">
          {{-- <h2>Trabajos Realizados</h2> --}}
          <div class="row row-30 row-md-50">
            @foreach ($works as $work )
            <div class="col-md-6 col-xl-4">
              <!-- Post classic-->
              <article class="post-minimal"><a class="post-minimal-figure-link" href="{{ route('proyecto.showp', $work) }}">
                <img src="{{ Storage::url($work->image) }}" alt="{{ $work->title }}" width="418" height="315"/></a>
                <div class="post-classic-title">
                  <h5><a href="{{ route('proyecto.showp', $work) }}">{{ $work->title }}</a></h5>
                </div>
                <p>{!! $work->shortdescription !!}</p>
              </article>
            </div>
            @endforeach 
           


          </div>

          <div class="mt-4">
            {{ $works->links() }}
          </div>
        </div>
      </section>
   



@stop      